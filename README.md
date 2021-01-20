# [LL - Language Localization](https://github.com/imithu/LL-Wordpress)

## Installation
``` sh
# method 1
# download and install this in wordpress

# method 2
# in wordpress plugin directory, execute this command
composer create-project imithu/ll-wordpress
```



## Guide
in config.json file,\
set there the default language, rtl languages and infos
``` json
    {
        "lang_default": "lang_name",
        "rtl": [ "lang_name_1", "lang_name_2", "lang_name_..." ],
        "info": 
        [
            [ "key", "info_1", "info_2", "info_..." ],
            [ "key", "info_1", "info_2", "info_..." ]
        ]
    }
```

in page,
``` php
require_once 'path../vendor/autoload.php';   // load the composer autoload file
use LL\Lang;                    // load Lang class

Lang::$Path = 'value'; // set language json file location in full path


Lang::lang_set( 'lang_name' );  // set current language
Lang::lang_get();               // get current language


Lang::__( 'Word_key' );              // get translated word


Lang::rtl();   // return true if language direction is rtl else false
Lang::info( 'key' );  // get all the info based on that key

```


## Simple Example
page.php
``` php

use LL\Lang;



Lang::lang_set( 'bn' ); // tips: use this with javascript fetch or ajax once . you can also use the built-in ajax function named lang_set

Lang::$Path = plugin_dir_path(__FILE__).'value'; // from plugin
Lang::$Path = get_theme_file_path( 'value' );   // from theme

/**
 *  here,
 *  page.json is the languages json file name
 *  you can create unlimited number of nested folder.
 *  fun fact: folder is optional. (:
 * 
 */
echo Lang::__( 'Home' ); // it will show বাড়ি

```

folder/page.json
``` json
{
    "ar":
    {
        "Home"         : "الصفحة الرئيسية",
        "Contact Us"   : "اتصل بنا",
        "About Us"     : "معلومات عنا",
        "Login"        : "تسجيل الدخول",
        "Registration" : "التسجيل"
    },
    "bn":
    {
        "Home"         : "বাড়ি",
        "Contact Us"   : "যোগাযোগ করুন",
        "About Us"     : "আমাদের সম্পর্কে",
        "Login"        : "প্রবেশ করুন",
        "Registration" : "নিবন্ধন"
    },
    "en":
    {
        "Home"         : "Home",
        "Contact Us"   : "Contact Us",
        "About Us"     : "About Us",
        "Login"        : "Login",
        "Registration" : "Registration"
    },
    "ko":
    {
        "Home"         : "집",
        "Contact Us"   : "문의하기",
        "About Us"     : "회사 소개",
        "Login"        : "로그인",
        "Registration" : "기재"
    },
    "ur":
    {
        "Home"         : "گھر",
        "Contact Us"   : "ہم سے رابطہ کریں",
        "About Us"     : "ہمارے بارے میں",
        "Login"        : "لاگ ان کریں",
        "Registration" : "اندراج"
    }

}
```


## Tips
Follow this language chart
### [List of ISO 639-1 codes](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes)
**Fun Fact:** it is totally optional. you can use any name for any language.



## Thank you very much.