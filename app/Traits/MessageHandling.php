<?php

namespace App\Traits;

use App\Models\Message;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\UnsentAttendanceMessage;
use Illuminate\Support\Facades\Storage;

trait MessageHandling {
    public function sendSMS($phone, $message){
        $post_url = "https://api.smsinbd.com/sms-api/sendsms" ;  
        $post_values = array(
            'api_token' => 'V4Fbl2ANcZnLg78hz5ThHHo8af0EetRtKylgAHDv',
            'senderid' => '8809612442476',
            'message' => $message.'-from, PepploBD LTD.',
            'contact_number' => '88'.$phone,
        );
        $post_string = "";
        foreach( $post_values as $key => $value )
            { $post_string .= "$key=" . urlencode( $value ) . "&"; }
        $post_string = rtrim( $post_string, "& " );
        
        $request = curl_init($post_url);
            curl_setopt($request, CURLOPT_HEADER, 0);
            curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);  
            curl_setopt($request, CURLOPT_POSTFIELDS, $post_string); 
            curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE);  
            $post_response = curl_exec($request);
        curl_close ($request);

        $array =  json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $post_response), true );

        $status = array_key_exists('status', $array) && $array['status'] == 'success' ? true : false;

        return $status;
    }

    public function sendUnsentAttendanceMessages(){
        $unsentMessages = UnsentAttendanceMessage::all();
        $unsentMessageModel = new UnsentAttendanceMessage();

        foreach($unsentMessages as $unsentMessage){
            //get student
            $student = Student::find($unsentMessage->student_id);

            //check if message is already sent today
            $isMessageAlreadySentToday = Message::where('user_id', $student->id)
            ->where('user_type', 'App\Models\Student')
            ->where('message_type', 'attendance')
            ->whereDate('created_at', now())
            ->exists();
        
            //send message if not sent today
            if(!$isMessageAlreadySentToday){
                $sms = $student->name." is absent today.";
                $sendMessage = $this->sendSMS($student->local_guardian_contact, $sms);

                //save message to database if sent
                if($sendMessage){
                    //Save message to database
                    $message = new Message();
                    $message->user()->associate($student);
                    $message->message = $sms;
                    $message->sent_to = $student->local_guardian_contact;
                    $message->message_type = 'attendance';
                    $message->save();
                }
            }
            //delete unsent message
            $unsentMessageModel->destroy($unsentMessage->id);
        }
    }
}

// {"status":"success","message":"SMS sent successfully","smsid":"23022782466330756062","SmsCount":1}