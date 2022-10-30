<?php
/* Configurations */
$config = array(

    "app_id" => "",
    "version" => "1.0",

    /* Allowance settings */
    "allowed_remote_address" => "127.0.0.1,::1,localhost",
    "allowed_origins" => "localhost",

    /* Basic settings */
    "site_name" => "Abstracts Framework",
    "base_url" => "http://localhost/abstracts",

    "language" => "en",
    "backend_language" => "en",

    "translate" => true,
    "backend_translate" => true,
    "translate_value" => true,

    "template" => "default",
    "backend_template" => "default",

    /* Contact */
    "email" => "",
    "phone" => "",
    "address" => "",

    /* Social links */
    "facebook" => "",
    "twitter" => "",
    "instagram" => "",
    "google+" => "",
    "linkedin" => "",
    "pinterest" => "",
    "youtube" => "",
    "ask.fm" => "",
    "tumblr" => "",
    "foursquare" => "",

    /* Regional settings */
    "encoding" => "UTF-8",
    "timezone" => "Asia/Bangkok",

    /* Notification */
    "notification_color" => "#ffffff",
    "notification_icon" => "",
    "notification_token" => "",

    /* Google analytics code */
    "google_analytics" => "",

    /* Facebook analytics code */
    "facebook_analytics" => "",

    /* Google webmaster tools */
    "google_site_verification" => "",

    /* Bing webmaster tools */
    "bing_site_verification" => "",

    /* Mail */
    "smtp" => true,
    "smtp_host" => "", // "smtp.gmail.com"
    "smtp_port" => 587,
    "smtp_secure" => "", // "ssl" | "tls"
    "smtp_auth" => true,
    "smtp_system_email_username" => "",
    "smtp_system_email_password" => "",

    /* Apple Service */
    "service_apple_shared_secret" => "",

    /* Google Service */
    "service_google_client_email" => "",
    "service_google_private_key" => "",

    /* Google Authentication App Configurations */
    "connect_google_redirect_url" => "http://localhost/abstracts/service/core/1.0/connect.php?method=google",
    "connect_google_api_key" => "",
    "connect_google_client_config_path" => "",
    "connect_google_scope" => "", // "profile,email,openid"

    /* Microsoft Authentication App Configurations */
    "connect_microsoft_redirect_url" => "http://localhost/abstracts/service/core/1.0/connect.php?method=microsoft",
    "connect_microsoft_id" => "",
    "connect_microsoft_secret" => "",
    "connect_microsoft_scope" => "",

    /* Apple Authentication App Configurations */
    "connect_apple_redirect_url" => "http://localhost/abstracts/service/core/1.0/connect.php?method=apple",
    "connect_apple_id" => "",
    "connect_apple_secret" => "",
    "connect_apple_kid" => "",
    "connect_apple_team_id" => "",
    "connect_apple_key" => "",
    "connect_apple_scope" => "", // "name,email"

    /* Facebook Authentication App Configurations */
    "connect_facebook_redirect_url" => "http://localhost/abstracts/service/core/1.0/connect.php?method=facebook",
    "connect_facebook_id" => "",
    "connect_facebook_secret" => "",
    "connect_facebook_scope" => "", // "public_profile,email"

    /* Twitter Authentication App Configurations */
    "connect_twitter_redirect_url" => "http://localhost/abstracts/service/core/1.0/connect.php?method=twitter",
    "connect_twitter_id" => "",
    "connect_twitter_secret" => "",
    "connect_twitter_scope" => "",

    /* Snapchat Authentication App Configurations */
    "connect_snapchat_redirect_url" => "http://localhost/abstracts/service/core/1.0/connect.php?method=snapchat",
    "connect_snapchat_id" => "",
    "connect_snapchat_secret" => "",
    "connect_snapchat_scope" => "", // "https://auth.snapchat.com/oauth2/api/user.display_name, https://auth.snapchat.com/oauth2/api/user.bitmoji.avatar,https://auth.snapchat.com/oauth2/api/user.external_id"
    "connect_snapchat_api_key" => "",

    /* Spotify Authentication App Configurations */
    "connect_spotify_redirect_url" => "http://localhost/abstracts/service/core/1.0/connect.php?method=spotify",
    "connect_spotify_id" => "",
    "connect_spotify_secret" => "",
    "connect_spotify_scope" => "", // "user-top-read"

    /* Line Authentication App Configurations */
    "connect_line_redirect_url" => "http://localhost/abstracts/service/core/1.0/connect.php?method=line",
    "connect_line_id" => "",
    "connect_line_secret" => "",
    "connect_line_scope" => "", // "openid,profile"

    /* Tinder Authentication App Configurations */
    "connect_tinderfacebook_redirect_url" => "https://www.facebook.com/connect/login_success.html",
    "connect_tinderfacebook_id" => "",
    "connect_tinderfacebook_secret" => "",
    "connect_tinderfacebook_scope" => "", // "basic_info,email,public_profile,user_about_me,user_activities,user_birthday,user_education_history,user_friends,user_interests,user_likes,user_location,user_photos,user_relationship_details"

    /* Pagination */
    "page_limit" => 10,
    "page_parameter_name" => "page",

    /* Environments */
    "url_rewritting" => false,
    "compression" => false,
    "online" => true,

    /* Log */
    "log" => array("normal", "risk", "high"), // This could reduce query time
    "server_log" => false, // This could reduce query time

    /* Session */
    "session_duration" => "+6 months", // use strtotime command

    /* Password */
    "password_salt" => "AbstractFramework",

    /* Lock */
    "lock" => false,
    "lock_expiration" => "24:00:00",

    /* User */
    "signup_email_verification" => false,
    "signup_phone_verification" => false,
    "signup_ndid_verification" => false,
    "signup_default_group" => "4",

    /* Admin settings */
    "backend_url" => "console",
    "max_upload_size" => 100,
    "datatable_data_limit" => 100,
    "datatable_page_limit" => 20, // 5 | 10 | 20

    /* Commerce */
    "size_unit" => "cm", // "cm" (Centimeter) | "m" (Metre) | "in" (Inch) | "ft" (Foot)
    "weight_unit" => "g", // "g" (Gram) | "kg" (Kilogram) | "lb" (Pound)
    "currency" => "USD", // "USD" | "EUR" | "AUD" | "CAD" | "CNY" | "JPY" | "KRW" | "HKD" | "THB"
    "vat_amount" => "", // 3 (VAT percent)

    /* Payment Gateway */
    "omise_api_version" => "",
    "omise_public_key" => "",
    "omise_secret_key" => "",
    "omise_fee" => "",
    "omise_fee_vat_amount" => "",

    /* Data encryption */
    "encrypt_authorization" => "RS256",
    "encrypt_response" => "", // "HS256"

    "encrypt_key" => "",

    "encrypt_ssl_private_key" => "",

    "encrypt_ssl_public_key" => "",

);

/* Database details */
$database_access = array(
    "host" => "localhost",
    "name" => "",
    "login" => "root",
    "password" => "",
    "encoding" => "utf8mb4"
);

?>