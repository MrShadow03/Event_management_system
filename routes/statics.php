<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect(route('dashboard.default'));
});

// Dashboard Routes [Default, E-Commerce, Projects, Online Courses, Marketing, Bidding, POS System, Call center, Logistics, Website Analytics, Finance Performance, Store Analytics, Social, Delivery, Crypto, School, Podcast, Landing]
Route::group(['prefix' => '/dashboard', 'as' => 'dashboard.'], function(){
    //  Default Dashboard
    Route::get('/default', function () {
        return view('admin.pages.dashboards.default');
    })->name('default');

    // E-Commerce Dashboard
    Route::get('/e-commerce', function () {
        return view('admin.pages.dashboards.e-commerce');
    })->name('e-commerce');

    // Projects Dashboard
    Route::get('/projects', function () {
        return view('admin.pages.dashboards.projects');
    })->name('projects');

    // Online Courses Dashboard
    Route::get('/online-courses', function () {
        return view('admin.pages.dashboards.online_courses');
    })->name('online_courses');

    // Marketing Dashboard
    Route::get('/marketing', function () {
        return view('admin.pages.dashboards.marketing');
    })->name('marketing');

    // Bidding Dashboard
    Route::get('/bidding', function () {
        return view('admin.pages.dashboards.bidding');
    })->name('bidding');

    // POS System Dashboard
    Route::get('/pos-system', function () {
        return view('admin.pages.dashboards.pos_system');
    })->name('pos_system');

    // Call center Dashboard
    Route::get('/call-center', function () {
        return view('admin.pages.dashboards.call_center');
    })->name('call_center');

    // Logistics Dashboard
    Route::get('/logistics', function () {
        return view('admin.pages.dashboards.logistics');
    })->name('logistics');

    // Website Analytics Dashboard
    Route::get('/website-analytics', function () {
        return view('admin.pages.dashboards.website_analytics');
    })->name('website_analytics');

    // Finance Performance Dashboard
    Route::get('/finance-performance', function () {
        return view('admin.pages.dashboards.finance_performance');
    })->name('finance_performance');

    // Store Analytics Dashboard
    Route::get('/store-analytics', function () {
        return view('admin.pages.dashboards.store_analytics');
    })->name('store_analytics');

    // Social Dashboard
    Route::get('/social', function () {
        return view('admin.pages.dashboards.social');
    })->name('social');

    // Delivery Dashboard
    Route::get('/delivery', function () {
        return view('admin.pages.dashboards.delivery');
    })->name('delivery');

    // Crypto Dashboard
    Route::get('/crypto', function () {
        return view('admin.pages.dashboards.crypto');
    })->name('crypto');

    // School Dashboard
    Route::get('/school', function () {
        return view('admin.pages.dashboards.school');
    })->name('school');

    // Podcast Dashboard
    Route::get('/podcast', function () {
        return view('admin.pages.dashboards.podcast');
    })->name('podcast');

    // Landing Dashboard
    Route::get('/landing', function () {
        return view('admin.pages.dashboards.landing');
    })->name('landing');
});

// Pages Routes [Multi step sign up, Welcome message, Verify email, Coming soon, Password confirmation, Account deactivation, Error 404, Error 500]
Route::group(['prefix' => '/pages', 'as' => 'pages.'], function(){

    //User Profile Pages [Overview, Projects, Campaigns, Documents, Followers, Activity]
    Route::group(['prefix' => '/user-profile', 'as' => 'user_profile.'], function(){

        // Overview Page
        Route::get('/overview', function () {
            return view('admin.pages.pages.user_profile.overview');
        })->name('overview');

        // Projects Page
        Route::get('/projects', function () {
            return view('admin.pages.pages.user_profile.projects');
        })->name('projects');

        // Campaigns Page
        Route::get('/campaigns', function () {
            return view('admin.pages.pages.user_profile.campaigns');
        })->name('campaigns');

        // Documents Page
        Route::get('/documents', function () {
            return view('admin.pages.pages.user_profile.documents');
        })->name('documents');

        // Followers Page
        Route::get('/followers', function () {
            return view('admin.pages.pages.user_profile.followers');
        })->name('followers');

        // Activity Page
        Route::get('/activity', function () {
            return view('admin.pages.pages.user_profile.activity');
        })->name('activity');
    });

    // Accounts Pages [Overview, Settings, Security, Activity, Billing, Statements, Referrals, API Keys, Log]
    Route::group(['prefix' => '/account', 'as' => 'account.'], function(){

        // Overview Page
        Route::get('/overview', function () {
            return view('admin.pages.pages.account.overview');
        })->name('overview');

        // Settings Page
        Route::get('/settings', function () {
            return view('admin.pages.pages.account.settings');
        })->name('settings');

        // Security Page
        Route::get('/security', function () {
            return view('admin.pages.pages.account.security');
        })->name('security');

        // Activity Page
        Route::get('/activity', function () {
            return view('admin.pages.pages.account.activity');
        })->name('activity');

        // Billing Page
        Route::get('/billing', function () {
            return view('admin.pages.pages.account.billing');
        })->name('billing');

        // Statements Page
        Route::get('/statements', function () {
            return view('admin.pages.pages.account.statements');
        })->name('statements');

        // Referrals Page
        Route::get('/referrals', function () {
            return view('admin.pages.pages.account.referrals');
        })->name('referrals');

        // API Keys Page
        Route::get('/api-keys', function () {
            return view('admin.pages.pages.account.api_keys');
        })->name('api_keys');

        // Log Page
        Route::get('/log', function () {
            return view('admin.pages.pages.account.log');
        })->name('log');
    });

    // Authentication Pages 
    Route::group(['prefix' => '/authentication', 'as' => 'authentication.'], function(){

        // Corporate layout [Sign In, Sign Up, Two factor, Reset Password, New Password]
        Route::group(['prefix' => '/corporate', 'as' => 'corporate.'], function(){

            // Sign In Page
            Route::get('/sign-in', function () {
                return view('admin.pages.pages.authentication.corporate.sign_in');
            })->name('sign_in');

            // Sign Up Page
            Route::get('/sign-up', function () {
                return view('admin.pages.pages.authentication.corporate.sign_up');
            })->name('sign_up');

            // Two factor page
            Route::get('/two-factor', function () {
                return view('admin.pages.pages.authentication.corporate.two_factor');
            })->name('two_factor');

            // Reset Password Page
            Route::get('/reset-password', function () {
                return view('admin.pages.pages.authentication.corporate.reset_password');
            })->name('reset_password');

            // New Password Page
            Route::get('/new-password', function () {
                return view('admin.pages.pages.authentication.corporate.new_password');
            })->name('new_password');
        });

        // Overlay layout [Sign In, Sign Up, Two factor, Reset Password, New Password]
        Route::group(['prefix' => '/overlay', 'as' => 'overlay.'], function(){

            // Sign In Page
            Route::get('/sign-in', function () {
                return view('admin.pages.pages.authentication.overlay.sign_in');
            })->name('sign_in');

            // Sign Up Page
            Route::get('/sign-up', function () {
                return view('admin.pages.pages.authentication.overlay.sign_up');
            })->name('sign_up');

            // Two factor page
            Route::get('/two-factor', function () {
                return view('admin.pages.pages.authentication.overlay.two_factor');
            })->name('two_factor');

            // Reset Password Page
            Route::get('/reset-password', function () {
                return view('admin.pages.pages.authentication.overlay.reset_password');
            })->name('reset_password');

            // New Password Page
            Route::get('/new-password', function () {
                return view('admin.pages.pages.authentication.overlay.new_password');
            })->name('new_password');
        });

        // Creative layout [Sign In, Sign Up, Two factor, Reset Password, New Password]
        Route::group(['prefix' => '/creative', 'as' => 'creative.'], function(){

            // Sign In Page
            Route::get('/sign-in', function () {
                return view('admin.pages.pages.authentication.creative.sign_in');
            })->name('sign_in');

            // Sign Up Page
            Route::get('/sign-up', function () {
                return view('admin.pages.pages.authentication.creative.sign_up');
            })->name('sign_up');

            // Two factor page
            Route::get('/two-factor', function () {
                return view('admin.pages.pages.authentication.creative.two_factor');
            })->name('two_factor');

            // Reset Password Page
            Route::get('/reset-password', function () {
                return view('admin.pages.pages.authentication.creative.reset_password');
            })->name('reset_password');

            // New Password Page
            Route::get('/new-password', function () {
                return view('admin.pages.pages.authentication.creative.new_password');
            })->name('new_password');
        });
        
        // Fancy layout [Sign In, Sign Up, Two factor, Reset Password, New Password]
        Route::group(['prefix' => '/fancy', 'as' => 'fancy.'], function(){

            // Sign In Page
            Route::get('/sign-in', function () {
                return view('admin.pages.pages.authentication.fancy.sign_in');
            })->name('sign_in');

            // Sign Up Page
            Route::get('/sign-up', function () {
                return view('admin.pages.pages.authentication.fancy.sign_up');
            })->name('sign_up');

            // Two factor page
            Route::get('/two-factor', function () {
                return view('admin.pages.pages.authentication.fancy.two_factor');
            })->name('two_factor');

            // Reset Password Page
            Route::get('/reset-password', function () {
                return view('admin.pages.pages.authentication.fancy.reset_password');
            })->name('reset_password');

            // New Password Page
            Route::get('/new-password', function () {
                return view('admin.pages.pages.authentication.fancy.new_password');
            })->name('new_password');
        });

        // Email templates [Welcome, Reset Password, Subscription Confirmation, Credit card declined, Promo 1, Promo 2, Promo 3]
        Route::group(['prefix' => '/email-templates', 'as' => 'email_templates.'], function(){

            // Welcome Page
            Route::get('/welcome', function () {
                return view('admin.pages.pages.authentication.email_templates.welcome');
            })->name('welcome');

            // Reset Password Page
            Route::get('/reset-password', function () {
                return view('admin.pages.pages.authentication.email_templates.reset_password');
            })->name('reset_password');

            // Subscription Confirmation Page
            Route::get('/subscription-confirmation', function () {
                return view('admin.pages.pages.authentication.email_templates.subscription_confirmation');
            })->name('subscription_confirmation');

            // Credit card declined Page
            Route::get('/credit-card-declined', function () {
                return view('admin.pages.pages.authentication.email_templates.credit_card_declined');
            })->name('credit_card_declined');

            // Promo 1 Page
            Route::get('/promo-1', function () {
                return view('admin.pages.pages.authentication.email_templates.promo_1');
            })->name('promo_1');

            // Promo 2 Page
            Route::get('/promo-2', function () {
                return view('admin.pages.pages.authentication.email_templates.promo_2');
            })->name('promo_2');

            // Promo 3 Page
            Route::get('/promo-3', function () {
                return view('admin.pages.pages.authentication.email_templates.promo_3');
            })->name('promo_3');           
        });

        // Multi step sign up page
        Route::get('/multi-step-sign-up', function () {
            return view('admin.pages.pages.authentication.multi_step_sign_up');
        })->name('multi_step_sign_up');

        // Welcome message page
        Route::get('/welcome-message', function () {
            return view('admin.pages.pages.authentication.welcome_message');
        })->name('welcome_message');

        // Verify email page
        Route::get('/verify-email', function () {
            return view('admin.pages.pages.authentication.verify_email');
        })->name('verify_email');

        // Coming soon page
        Route::get('/coming-soon', function () {
            return view('admin.pages.pages.authentication.coming_soon');
        })->name('coming_soon');

        // Password confirmation page
        Route::get('/password-confirmation', function () {
            return view('admin.pages.pages.authentication.password_confirmation');
        })->name('password_confirmation');

        // Account deactivation page
        Route::get('/account-deactivation', function () {
            return view('admin.pages.pages.authentication.account_deactivation');
        })->name('account_deactivation');

        // Error 404 page
        Route::get('/error-404', function () {
            return view('admin.pages.pages.authentication.error_404');
        })->name('error_404');

        // Error 500 page
        Route::get('/error-500', function () {
            return view('admin.pages.pages.authentication.error_500');
        })->name('error_500');
    });

    // Corporate Pages [About, Our Team, Contact Us, Licenses, Sitemap]
    Route::group(['prefix' => '/corporate', 'as' => 'corporate.'], function(){
    
        // About Page
        Route::get('/about', function () {
            return view('admin.pages.pages.corporate.about');
        })->name('about');
    
        // Our Team Page
        Route::get('/our-team', function () {
            return view('admin.pages.pages.corporate.our_team');
        })->name('our_team');
    
        // Contact Us Page
        Route::get('/contact-us', function () {
            return view('admin.pages.pages.corporate.contact_us');
        })->name('contact_us');
    
        // Licenses Page
        Route::get('/licenses', function () {
            return view('admin.pages.pages.corporate.licenses');
        })->name('licenses');
    
        // Sitemap Page
        Route::get('/sitemap', function () {
            return view('admin.pages.pages.corporate.sitemap');
        })->name('sitemap'); 
    });
    
    // Social Pages [Feeds, Activity, Followers, Settings]
    Route::group(['prefix' => '/social', 'as' => 'social.'], function(){
    
        // Feeds Page
        Route::get('/feeds', function () {
            return view('admin.pages.pages.social.feeds');
        })->name('feeds');
    
        // Activity Page
        Route::get('/activity', function () {
            return view('admin.pages.pages.social.activity');
        })->name('activity');
    
        // Followers Page
        Route::get('/followers', function () {
            return view('admin.pages.pages.social.followers');
        })->name('followers');
    
        // Settings Page
        Route::get('/settings', function () {
            return view('admin.pages.pages.social.settings');
        })->name('settings');
    });
    
    // Blog Pages [Blog home, Blog post]
    Route::group(['prefix' => '/blog', 'as' => 'blog.'], function(){
    
        // Blog home Page
        Route::get('/blog-home', function () {
            return view('admin.pages.pages.blog.blog_home');
        })->name('blog_home');
    
        // Blog post Page
        Route::get('/blog-post', function () {
            return view('admin.pages.pages.blog.blog_post');
        })->name('blog_post');
    });
    
    // FAQ Pages [FAQ classic, FAQ Extended]
    Route::group(['prefix' => '/faq', 'as' => 'faq.'], function(){
    
        // FAQ classic Page
        Route::get('/faq-classic', function () {
            return view('admin.pages.pages.faq.faq_classic');
        })->name('faq_classic');
    
        // FAQ Extended Page
        Route::get('/faq-extended', function () {
            return view('admin.pages.pages.faq.faq_extended');
        })->name('faq_extended');
    });
    
    // Pricing Pages [Column pricing, Table pricing]
    Route::group(['prefix' => '/pricing', 'as' => 'pricing.'], function(){
    
        // Column pricing Page
        Route::get('/column-pricing', function () {
            return view('admin.pages.pages.pricing.column_pricing');
        })->name('column_pricing');
    
        // Table pricing Page
        Route::get('/table-pricing', function () {
            return view('admin.pages.pages.pricing.table_pricing');
        })->name('table_pricing');
    });
    
    // Careers Pages [Careers list, Careers Apply]
    Route::group(['prefix' => '/careers', 'as' => 'careers.'], function(){
    
        // Careers list Page
        Route::get('/careers-list', function () {
            return view('admin.pages.pages.careers.careers_list');
        })->name('careers_list');
    
        // Careers Apply Page
        Route::get('/careers-apply', function () {
            return view('admin.pages.pages.careers.careers_apply');
        })->name('careers_apply');
    });
    
    // Utilities Pages
    Route::group(['prefix' => '/utilities', 'as' => 'utilities.'], function(){
    
        // Modal Pages [General, Forms, Wizards, Search]
        Route::group(['prefix' => '/modal', 'as' => 'modal.'], function(){
    
            // General [Invite friends, View users, Select users, Upgrade Plan, Share & Earn]
            Route::group(['prefix' => '/general', 'as' => 'general.'], function(){
    
                // Invite friends Page
                Route::get('/invite-friends', function () {
                    return view('admin.pages.pages.utilities.modal.general.invite_friends');
                })->name('invite_friends');
    
                // View users Page
                Route::get('/view-users', function () {
                    return view('admin.pages.pages.utilities.modal.general.view_users');
                })->name('view_users');
    
                // Select users Page
                Route::get('/select-users', function () {
                    return view('admin.pages.pages.utilities.modal.general.select_users');
                })->name('select_users');
    
                // Upgrade Plan Page
                Route::get('/upgrade-plan', function () {
                    return view('admin.pages.pages.utilities.modal.general.upgrade_plan');
                })->name('upgrade_plan');
    
                // Share & Earn Page
                Route::get('/share-and-earn', function () {
                    return view('admin.pages.pages.utilities.modal.general.share_and_earn');
                })->name('share_and_earn');
            });
    
            // Forms [New target, New card, New addresses, Create API key, Bidding]
            Route::group(['prefix' => '/forms', 'as' => 'forms.'], function(){
    
                // New target Page
                Route::get('/new-target', function () {
                    return view('admin.pages.pages.utilities.modal.forms.new_target');
                })->name('new_target');
    
                // New card Page
                Route::get('/new-card', function () {
                    return view('admin.pages.pages.utilities.modal.forms.new_card');
                })->name('new_card');
    
                // New addresses Page
                Route::get('/new-addresses', function () {
                    return view('admin.pages.pages.utilities.modal.forms.new_addresses');
                })->name('new_addresses');
    
                // Create API key Page
                Route::get('/create-api-key', function () {
                    return view('admin.pages.pages.utilities.modal.forms.create_api_key');
                })->name('create_api_key');
    
                // Bidding Page
                Route::get('/bidding', function () {
                    return view('admin.pages.pages.utilities.modal.forms.bidding');
                })->name('bidding');
            });
    
            // Wizards [Create app, Create campaign, Create Business account, Create project, Top up wallet, Offer a deal, Two factor auth]
            Route::group(['prefix' => '/wizards', 'as' => 'wizards.'], function(){
    
                // Create app Page
                Route::get('/create-app', function () {
                    return view('admin.pages.pages.utilities.modal.wizards.create_app');
                })->name('create_app');
    
                // Create campaign Page
                Route::get('/create-campaign', function () {
                    return view('admin.pages.pages.utilities.modal.wizards.create_campaign');
                })->name('create_campaign');
    
                // Create Business account Page
                Route::get('/create-business-account', function () {
                    return view('admin.pages.pages.utilities.modal.wizards.create_business_account');
                })->name('create_business_account');
    
                // Create project Page
                Route::get('/create-project', function () {
                    return view('admin.pages.pages.utilities.modal.wizards.create_project');
                })->name('create_project');
    
                // Top up wallet Page
                Route::get('/top-up-wallet', function () {
                    return view('admin.pages.pages.utilities.modal.wizards.top_up_wallet');
                })->name('top_up_wallet');
    
                // Offer a deal Page
                Route::get('/offer-a-deal', function () {
                    return view('admin.pages.pages.utilities.modal.wizards.offer_a_deal');
                })->name('offer_a_deal');
    
                // Two factor auth Page
                Route::get('/two-factor-auth', function () {
                    return view('admin.pages.pages.utilities.modal.wizards.two_factor_auth');
                })->name('two_factor_auth');        
            });
    
            // Search [Users, Select location]
            Route::group(['prefix' => '/search', 'as' => 'search.'], function(){
    
                // Users Page
                Route::get('/users', function () {
                    return view('admin.pages.pages.utilities.modal.search.users');
                })->name('users');
    
                // Select location Page
                Route::get('/select-location', function () {
                    return view('admin.pages.pages.utilities.modal.search.select_location');
                })->name('select_location');
            });
        });
    
        // Search Pages [Horizontal, Vertical, Users, Location]
        Route::group(['prefix' => '/search', 'as' => 'search.'], function(){
    
            // Horizontal Page
            Route::get('/horizontal', function () {
                return view('admin.pages.pages.utilities.search.horizontal');
            })->name('horizontal');
    
            // Vertical Page
            Route::get('/vertical', function () {
                return view('admin.pages.pages.utilities.search.vertical');
            })->name('vertical');
    
            // Users Page
            Route::get('/users', function () {
                return view('admin.pages.pages.utilities.search.users');
            })->name('users');
    
            // Location Page
            Route::get('/location', function () {
                return view('admin.pages.pages.utilities.search.location');
            })->name('location');
        });
    
        // Wizards Pages [Horizontal, Vertical, Two factor auth, Create app, Create campaign, Create Account, Create project, Top up wallet, Offer a deal]
        Route::group(['prefix' => 'wizards', 'as' => 'wizards.'], function(){
    
            // Horizontal Page
            Route::get('/horizontal', function () {
                return view('admin.pages.pages.utilities.wizards.horizontal');
            })->name('horizontal');
    
            // Vertical Page
            Route::get('/vertical', function () {
                return view('admin.pages.pages.utilities.wizards.vertical');
            })->name('vertical');
    
            // Two factor auth Page
            Route::get('/two-factor-auth', function () {
                return view('admin.pages.pages.utilities.wizards.two_factor_auth');
            })->name('two_factor_auth');
    
            // Create app Page
            Route::get('/create-app', function () {
                return view('admin.pages.pages.utilities.wizards.create_app');
            })->name('create_app');
    
            // Create campaign Page
            Route::get('/create-campaign', function () {
                return view('admin.pages.pages.utilities.wizards.create_campaign');
            })->name('create_campaign');
    
            // Create Account Page
            Route::get('/create-account', function () {
                return view('admin.pages.pages.utilities.wizards.create_account');
            })->name('create_account');
    
            // Create project Page
            Route::get('/create-project', function () {
                return view('admin.pages.pages.utilities.wizards.create_project');
            })->name('create_project');
    
            // Top up wallet Page
            Route::get('/top-up-wallet', function () {
                return view('admin.pages.pages.utilities.wizards.top_up_wallet');
            })->name('top_up_wallet');
    
            // Offer a deal Page
            Route::get('/offer-a-deal', function () {
                return view('admin.pages.pages.utilities.wizards.offer_a_deal');
            })->name('offer_a_deal');
        });
    });

    // Widgets Pages [List, Statistics, Charts, Mixed, Tables, Feeds]
    Route::group(['prefix' => '/widgets', 'as' => 'widgets.'], function(){

        // List Page
        Route::get('/list', function () {
            return view('admin.pages.pages.widgets.list');
        })->name('list');

        // Statistics Page
        Route::get('/statistics', function () {
            return view('admin.pages.pages.widgets.statistics');
        })->name('statistics');

        // Charts Page
        Route::get('/charts', function () {
            return view('admin.pages.pages.widgets.charts');
        })->name('charts');

        // Mixed Page
        Route::get('/mixed', function () {
            return view('admin.pages.pages.widgets.mixed');
        })->name('mixed');

        // Tables Page
        Route::get('/tables', function () {
            return view('admin.pages.pages.widgets.tables');
        })->name('tables');

        // Feeds Page
        Route::get('/feeds', function () {
            return view('admin.pages.pages.widgets.feeds');
        })->name('feeds');
    });
});

// Apps Routes
Route::group(['prefix' => '/apps', 'as' => 'apps.'], function(){

    // Project app [My projects, View project, Targets, Budget, Users, Files, Activity, Settings]
    Route::group(['prefix' => '/projects', 'as' => 'projects.'], function(){

        // My projects Page
        Route::get('/my-projects', function () {
            return view('admin.pages.apps.projects.my_projects');
        })->name('my_projects');

        // View project Page
        Route::get('/view-project', function () {
            return view('admin.pages.apps.projects.view_project');
        })->name('view_project');

        // Targets Page
        Route::get('/targets', function () {
            return view('admin.pages.apps.projects.targets');
        })->name('targets');

        // Budget Page
        Route::get('/budget', function () {
            return view('admin.pages.apps.projects.budget');
        })->name('budget');

        // Users Page
        Route::get('/users', function () {
            return view('admin.pages.apps.projects.users');
        })->name('users');

        // Files Page
        Route::get('/files', function () {
            return view('admin.pages.apps.projects.files');
        })->name('files');

        // Activity Page
        Route::get('/activity', function () {
            return view('admin.pages.apps.projects.activity');
        })->name('activity');

        // Settings Page
        Route::get('/settings', function () {
            return view('admin.pages.apps.projects.settings');
        })->name('settings');
    });

    // E-commerce app [Settings]
    Route::group(['prefix' => '/e-commerce', 'as' => 'e-commerce.'], function(){
        //Catalog Pages [Products, Categories, Add Product, Edit Product, Add Category, Edit Category]
        Route::group(['prefix' => '/catalog', 'as' => 'catalog.'], function(){

            // Products Page
            Route::get('/products', function () {
                return view('admin.pages.apps.e-commerce.catalog.products');
            })->name('products');

            // Categories Page
            Route::get('/categories', function () {
                return view('admin.pages.apps.e-commerce.catalog.categories');
            })->name('categories');

            // Add Product Page
            Route::get('/add-product', function () {
                return view('admin.pages.apps.e-commerce.catalog.add_product');
            })->name('add_product');

            // Edit Product Page
            Route::get('/edit-product', function () {
                return view('admin.pages.apps.e-commerce.catalog.edit_product');
            })->name('edit_product');

            // Add Category Page
            Route::get('/add-category', function () {
                return view('admin.pages.apps.e-commerce.catalog.add_category');
            })->name('add_category');

            // Edit Category Page
            Route::get('/edit-category', function () {
                return view('admin.pages.apps.e-commerce.catalog.edit_category');
            })->name('edit_category');
        });

        // Sales Pages [Orders listing, Orders detail, Add order, Edit order]
        Route::group(['prefix' => '/sales', 'as' => 'sales.'], function(){

            // Orders listing Page
            Route::get('/orders-listing', function () {
                return view('admin.pages.apps.e-commerce.sales.orders_listing');
            })->name('orders_listing');

            // Orders detail Page
            Route::get('/orders-detail', function () {
                return view('admin.pages.apps.e-commerce.sales.orders_detail');
            })->name('orders_detail');

            // Add order Page
            Route::get('/add-order', function () {
                return view('admin.pages.apps.e-commerce.sales.add_order');
            })->name('add_order');

            // Edit order Page
            Route::get('/edit-order', function () {
                return view('admin.pages.apps.e-commerce.sales.edit_order');
            })->name('edit_order');
        });

        // Customers Pages [Customer listing, Customer details]
        Route::group(['prefix' => '/customers', 'as' => 'customers.'], function(){

            // Customer listing Page
            Route::get('/customer-listing', function () {
                return view('admin.pages.apps.e-commerce.customers.customer_listing');
            })->name('customer_listing');

            // Customer details Page
            Route::get('/customer-details', function () {
                return view('admin.pages.apps.e-commerce.customers.customer_details');
            })->name('customer_details');
        });

        // Reports Pages [Products viewed, Sales, Returns, Customer orders, Shipping]
        Route::group(['prefix' => '/reports', 'as' => 'reports.'], function(){

            // Products viewed Page
            Route::get('/products-viewed', function () {
                return view('admin.pages.apps.e-commerce.reports.products_viewed');
            })->name('products_viewed');

            // Sales Page
            Route::get('/sales', function () {
                return view('admin.pages.apps.e-commerce.reports.sales');
            })->name('sales');

            // Returns Page
            Route::get('/returns', function () {
                return view('admin.pages.apps.e-commerce.reports.returns');
            })->name('returns');

            // Customer orders Page
            Route::get('/customer-orders', function () {
                return view('admin.pages.apps.e-commerce.reports.customer_orders');
            })->name('customer_orders');

            // Shipping Page
            Route::get('/shipping', function () {
                return view('admin.pages.apps.e-commerce.reports.shipping');
            })->name('shipping');
        });

        // Settings Page
        Route::get('/settings', function () {
            return view('admin.pages.apps.e-commerce.settings');
        })->name('settings');
    });

    // Contact app [Getting started, Add contact, Edit contact, View contact]
    Route::group(['prefix' => '/contact', 'as' => 'contacts.'], function(){

        // Getting started Page
        Route::get('/getting-started', function () {
            return view('admin.pages.apps.contacts.getting_started');
        })->name('getting_started');

        // Add contact Page
        Route::get('/add-contact', function () {
            return view('admin.pages.apps.contacts.add_contact');
        })->name('add_contact');

        // Edit contact Page
        Route::get('/edit-contact', function () {
            return view('admin.pages.apps.contacts.edit_contact');
        })->name('edit_contact');

        // View contact Page
        Route::get('/view-contact', function () {
            return view('admin.pages.apps.contacts.view_contact');
        })->name('view_contact');
    });

    // Support center app [Overview, FAQ, Licenses, Contact us]
    Route::group(['prefix' => '/support-center', 'as' => 'support_center.'], function(){

        // Overview Page
        Route::get('/overview', function () {
            return view('admin.pages.apps.support_center.overview');
        })->name('overview');

        //Tickets Pages [Tickets list, View ticket]
        Route::group(['prefix' => '/tickets', 'as' => 'tickets.'], function(){

            // Tickets list Page
            Route::get('/tickets-list', function () {
                return view('admin.pages.apps.support_center.tickets.tickets_list');
            })->name('tickets_list');

            // View ticket Page
            Route::get('/view-ticket', function () {
                return view('admin.pages.apps.support_center.tickets.view_ticket');
            })->name('view_ticket');
        });

        // Tutorials pages [Tutorials list, Tutorial post]
        Route::group(['prefix' => '/tutorials', 'as' => 'tutorials.'], function(){

            // Tutorials list Page
            Route::get('/tutorials-list', function () {
                return view('admin.pages.apps.support_center.tutorials.tutorials_list');
            })->name('tutorials_list');

            // Tutorial post Page
            Route::get('/tutorial-post', function () {
                return view('admin.pages.apps.support_center.tutorials.tutorial_post');
            })->name('tutorial_post');
        });

        // FAQ Page
        Route::get('/faq', function () {
            return view('admin.pages.apps.support_center.faq');
        })->name('faq');

        // Licenses Page
        Route::get('/licenses', function () {
            return view('admin.pages.apps.support_center.licenses');
        })->name('licenses');

        // Contact us Page
        Route::get('/contact-us', function () {
            return view('admin.pages.apps.support_center.contact_us');
        })->name('contact_us');
    });

    // User Management app [Permissions]
    Route::group(['prefix' => '/user-management', 'as' => 'user_management.'], function(){
        
        // Users pages [Users list, View user]
        Route::group(['prefix' => '/users', 'as' => 'users.'], function(){

            // Users list Page
            Route::get('/users-list', function () {
                return view('admin.pages.apps.user_management.users.users_list');
            })->name('users_list');

            // View user Page
            Route::get('/view-user', function () {
                return view('admin.pages.apps.user_management.users.view_user');
            })->name('view_user');
        });

        // Roles Pages [Roles list, View role]
        Route::group(['prefix' => '/roles', 'as' => 'roles.'], function(){

            // Roles list Page
            Route::get('/roles-list', function () {
                return view('admin.pages.apps.user_management.roles.roles_list');
            })->name('roles_list');

            // View role Page
            Route::get('/view-role', function () {
                return view('admin.pages.apps.user_management.roles.view_role');
            })->name('view_role');
        });

        // Permissions Page
        Route::get('/permissions', function () {
            return view('admin.pages.apps.user_management.permissions');
        })->name('permissions');
    });

    // Customers app [Getting started, Customer listing, Customer details]
    Route::group(['prefix' => '/customers', 'as' => 'customers.'], function(){

        // Getting started Page
        Route::get('/getting-started', function () {
            return view('admin.pages.apps.customers.getting_started');
        })->name('getting_started');

        // Customer listing Page
        Route::get('/customer-listing', function () {
            return view('admin.pages.apps.customers.customer_listing');
        })->name('customer_listing');

        // Customer details Page
        Route::get('/customer-details', function () {
            return view('admin.pages.apps.customers.customer_details');
        })->name('customer_details');
    });

    // Subscription app [Getting started, Subscription list, Add subscription, View subscription]
    Route::group(['prefix' => '/subscription', 'as' => 'subscription.'], function(){

        // Getting started Page
        Route::get('/getting-started', function () {
            return view('admin.pages.apps.subscription.getting_started');
        })->name('getting_started');

        // Subscription list Page
        Route::get('/subscription-list', function () {
            return view('admin.pages.apps.subscription.subscription_list');
        })->name('subscription_list');

        // Add subscription Page
        Route::get('/add-subscription', function () {
            return view('admin.pages.apps.subscription.add_subscription');
        })->name('add_subscription');

        // View subscription Page
        Route::get('/view-subscription', function () {
            return view('admin.pages.apps.subscription.view_subscription');
        })->name('view_subscription');
    });

    // Invoice Manager app [Create invoice]
    Route::group(['prefix' => '/invoice-manager', 'as' => 'invoice_manager.'], function(){

        // View invoices page [Invoice 1, Invoice 2, Invoice 3]
        Route::group(['prefix' => '/view-invoices', 'as' => 'view_invoices.'], function(){

            // Invoice 1 Page
            Route::get('/invoice-1', function () {
                return view('admin.pages.apps.invoice_manager.view_invoices.invoice_1');
            })->name('invoice_1');

            // Invoice 2 Page
            Route::get('/invoice-2', function () {
                return view('admin.pages.apps.invoice_manager.view_invoices.invoice_2');
            })->name('invoice_2');

            // Invoice 3 Page
            Route::get('/invoice-3', function () {
                return view('admin.pages.apps.invoice_manager.view_invoices.invoice_3');
            })->name('invoice_3');
        });

        // Create invoice page
        Route::get('/create-invoice', function () {
            return view('admin.pages.apps.invoice_manager.create_invoice');
        })->name('create_invoice');
    });

    // File manager app [Folders, Files, Blank directory, Settings]
    Route::group(['prefix' => '/file-manager', 'as' => 'file_manager.'], function(){

        // Folders Page
        Route::get('/folders', function () {
            return view('admin.pages.apps.file_manager.folders');
        })->name('folders');

        // Files Page
        Route::get('/files', function () {
            return view('admin.pages.apps.file_manager.files');
        })->name('files');

        // Blank directory Page
        Route::get('/blank-directory', function () {
            return view('admin.pages.apps.file_manager.blank_directory');
        })->name('blank_directory');

        // Settings Page
        Route::get('/settings', function () {
            return view('admin.pages.apps.file_manager.settings');
        })->name('settings');
    });

    //Inbox app [Messages, Compose, View & Reply]
    Route::group(['prefix' => '/inbox', 'as' => 'inbox.'], function(){

        // Messages Page
        Route::get('/messages', function () {
            return view('admin.pages.apps.inbox.messages');
        })->name('messages');

        // Compose Page
        Route::get('/compose', function () {
            return view('admin.pages.apps.inbox.compose');
        })->name('compose');

        // View & Reply Page
        Route::get('/view-and-reply', function () {
            return view('admin.pages.apps.inbox.view_and_reply');
        })->name('view_and_reply');
    });

    // Chat app [Private chat, Group chat, Drawer chat]
    Route::group(['prefix' => '/chat', 'as' => 'chat.'], function(){

        // Private chat Page
        Route::get('/private-chat', function () {
            return view('admin.pages.apps.chat.private_chat');
        })->name('private_chat');

        // Group chat Page
        Route::get('/group-chat', function () {
            return view('admin.pages.apps.chat.group_chat');
        })->name('group_chat');

        // Drawer chat Page
        Route::get('/drawer-chat', function () {
            return view('admin.pages.apps.chat.drawer_chat');
        })->name('drawer_chat');
    });

    // Calendar app page
    Route::get('/calendar', function () {
        return view('admin.pages.apps.calendar');
    })->name('calendar');
});

// Layouts Routes
Route::group(['prefix' => '/layouts', 'as' => 'layouts.'], function(){

    // Layout option pages [Light sidebar, Dark sidebar, Light header, Dark header]
    Route::group(['prefix' => '/layout-options', 'as' => 'layout_options.'], function(){

        // Light sidebar Page
        Route::get('/light-sidebar', function () {
            return view('admin.pages.layouts.layout_options.light_sidebar');
        })->name('light_sidebar');

        // Dark sidebar Page
        Route::get('/dark-sidebar', function () {
            return view('admin.pages.layouts.layout_options.dark_sidebar');
        })->name('dark_sidebar');

        // Light header Page
        Route::get('/light-header', function () {
            return view('admin.pages.layouts.layout_options.light_header');
        })->name('light_header');

        // Dark header Page
        Route::get('/dark-header', function () {
            return view('admin.pages.layouts.layout_options.dark_header');
        })->name('dark_header');
    });

    // Toolbars pages [Classic, SaaS, Accounting, Extended, Reports]
    Route::group(['prefix' => '/toolbars', 'as' => 'toolbars.'], function(){

        // Classic Page
        Route::get('/classic', function () {
            return view('admin.pages.layouts.toolbars.classic');
        })->name('classic');

        // SaaS Page
        Route::get('/saas', function () {
            return view('admin.pages.layouts.toolbars.saas');
        })->name('saas');

        // Accounting Page
        Route::get('/accounting', function () {
            return view('admin.pages.layouts.toolbars.accounting');
        })->name('accounting');

        // Extended Page
        Route::get('/extended', function () {
            return view('admin.pages.layouts.toolbars.extended');
        })->name('extended');

        // Reports Page
        Route::get('/reports', function () {
            return view('admin.pages.layouts.toolbars.reports');
        })->name('reports');
    });

    // Layout Builder Page
    Route::get('/layout-builder', function () {
        return view('admin.pages.layouts.layout_builder');
    })->name('layout_builder');
});