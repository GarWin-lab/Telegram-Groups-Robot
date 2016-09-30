<?php

namespace MohandesPlusBot\Enums;


/**
 * Set all messages text in this class.
 *
 * @package MohandesPlusBot\Enums
 *
 */
class Messages
{

    const CHOOSE_OPTION = 'یکی‌از گزینه‌ها را انتخاب کنید.';
    const CHOOSE_CORRECT_CHANNEL = 'لطفا کانال را درست انتخاب کنید:';
    const CHOOSE_ADMIN = 'ادمین مورد نظر را انتخاب کنید:';
    const FORWARD_MESSAGE_FROM_ADMIN = 'پیامی از ادمین مورد نظر فوروارد کنید:';
    const ADMIN_MUST_HAVE_USERNAME = 'ادمین موردنظر باید username داشته باشد. لطفا پیامی دیگر فوروارد کنید.';
    const HAVE_NOT_CHANNEL_FOR_MANAGE = "شما کانالی برای مدیریت ندارید :(";
    const HAVE_NOT_CHANNEL_FOR_DELETE = "شما کانالی برای حذف ندارید :(";
    const TEST_TO_CHANNEL = 'تست ربات';
    const ADD_CHANNEL_SUCCESS = 'کانال شما با موفقیت اضافه شد :)' . "\n";
    const ADD_CHANNEL_FAILED = 'خطا در اضافه کردن کانال! لطفا مجددا تلاش کنید.';
    const ADD_CHANNEL_TO_BOT_FAILED = 'ربات هنوز به کانال اضافه نشده!';
    //douplicate
    const YOU_ARE_NOT_CHANNEL_ADMIN = 'متاسفیم. به نظر نمیاید که شما ادمین این کانال باشید :(';
    const CHOOSE_CHANNEL = 'کانال را انتخاب کنید:';
    const FORWARD_POST = 'پست را فوروارد کنید:';
    const ENTER_YEAR = 'سال ارسال پیام خود را وارد کنید';
    const ENTER_MONTH = 'ماه ارسال پیام را وارد کنید:';
    const ENTER_DAY = 'روز ارسال پیام را وارد کنید:';
    const ENTER_HOUR = 'ساعت (۲۴ ساعته) ارسال پیام را وارد کنید:';
    const ENTER_MINUTE = 'دقیقه‌ی ارسال پیام را وارد کنید:';
    const POST_PREVIEW = 'پیش نمایش:';
    const ENTER_TIME_FAILED = 'هشدار! زمان انتخابی شما قبل از حال است! در این صورت پیام شما در لحظه فرستاده خواهد شد.';
    const WILL_SEND_POST = "پیام شما ارسال خواهد شد :)";
    //douplicate
    const ADMIN_CHANNEL_FAILED = 'متاسفیم. به نظر نمیاید که شما ادمین این کانال باشید :(' . "\n" . "با استفاده از ابزارهای مدیریتی میتوانید کانال اضافه کنید.";
    const ENTER_POST = 'پیام خود را وارد کنید:';
    const POST_TYPE = "نوع پست را انتخاب کنید:";
    const NOT_FOUND_POST = 'پستی یافت نشد :(';
    const POST_DELETE_FAILED = "خطا در حذف :( لطفا مجددا تلاش کنید.";
    const POST_DELETE_SUCCESS = "با موفقیت حذف شد :)";
    const REMOVE_CHANNEL_SUCCESS = 'با موفقیت حذف شد :)';
    const REMOVE_CHANNEL_FAILED = 'خطا در حذف کانال :( لطفا مجددا تلاش کنید.' . "\n";
    const ENTER_POST_CONTEXT = 'پیام خود را وارد کنید: (کمتر از ۱۵۰ کاراکتر)';
    const SEND_VIDEO = 'فیلم را بفرستید';
    const SEND_PHOTO = 'عکس را بفرستید';
    const SEND_GIF = 'گیف را بفرستید';
    const REPORT_CHANNEL_EXIST_ADDED_ANOTHER_HUMAN = '❗️هشدار' . "\n" .
    'این کانال قبلاً توسط شخص دیگری ثبت شده است.' . "\n" .
    '➖➖➖➖➖‏➖➖➖➖' . "\n" .
    'اگر این کانال برای شماست (Creator آن هستید)، از قسمت ' . "\"ارتباط با ما\"" . ' گزارش دهید.';

    const ADD_USERNAME_TO_ACCCOUNT = 'برای استفاده از این ربات باید Username داشته باشید. از قسمت تنظیمات تلگرام یک Username برای خود بسازید.';

    const ADD_BOT_AS_ADMIN_TO_CHANNEL = '❗️توجه❗️' . "\n" .
    'برای استفاده از ربات باید این ربات را به صورت ادمین به کانال خود اضافه کنید. در غیر این صورت ربات برای شما کار نخواهد کرد.' . "\n" .
    "➖➖➖➖➖‏➖➖➖➖'‏" . "\n" .
    "حال ربات را به صورت ادمین اضافه کنید و سپس دکمه‌ی \"انجام شد\" را بزنید." . "\n" .
    "⁉️نمیدونی چطور؟" . "\n" .
    "👈 به بخش \"راهنما\" برو 👍" . "\n" .
    "➖➖➖➖➖‏➖➖➖➖‏‏" . "\n" .
    "سپس ربات برای اطمینان از اینکه شما صاحب کانال هستید یک پست با متن (تست ربات) روی کانال قرار می‌دهد که شما می‌توانید به سرعت آن را پاک کنید." . "\n";

    const ADD_CHANNEL_HELP = '❗️حواستون باشه که روبات (...@) رو به‌صورت ادمین (Admin) به کانال اضافه کنید.

❗️این روبات، مخصوص کانال‌های عمومی (Public Channels) است و در کانال‌های خصوصی (Private Channels) کار نمی‌کند.

❗️پس از افزودن کانال یک پیام از طرف بات به کانال شما فرستاده می شود که میتوانید آن را حذف کنید.
➖➖➖➖➖➖➖ ‏

 👈 برای ادامه، آیدی (بدون @) کانال جدید خود را بفرستید.';

    const CHOOSE_CHANNEL_FAILED = "لطفا کانال را درست انتخاب کنید";

    const ENTER_CONTEXT_FAILED = "متن وارد شده بیش از ۴۰۹۶ کاراکتر دارد.";

    const CHOOSE_YEAR_FAILED = "سال وارد شده صحیح نیست دوباره تلاش کنید.";
    const CHOOSE_MONTH_FAILED = "ماه وارد شده صحیح نیست دوباره تلاش کنید.";
    const CHOOSE_DATE_FAILED = "روز وارد شده صحیح نیست دوباره تلاش کنید.";
    const CHOOSE_HOUR_FAILED = "ساعت وارد شده صحیح نیست دوباره تلاش کنید.";
    const CHOOSE_MINUTE_FAILED = "دقیقه وارد شده صحیح نیست دوباره تلاش کنید.";

    const END_LEVELS = "تمامی مراحل با موفقیت به پایان رسید. الان به منوی اصلی منتقل میشوید.";

    const ACCEPT_BY_USER = "اگر پست مورد تایید است دکمه تایید و ارسال بزنید.";


    const NOT_ACCEPT_POST = "شما پست خود را هنوز تایید نکرده اید.لطفا پست خود را تایید کنید .";

    const ENTER_MEDIA_CAPTION = "برای چندرسانه ای پیام بنویسید.";

    const NOT_VIDEO = "پست ارسالی شما ویدیو نیست. لطفا پست ویدویی ارسال کنید.";
    const NOT_PHOTO = "لطفا پست عکس ارسال کنید. پست شما عکس نیست.";
    const NOT_GIF = "لطفا پست گیف ارسال کنید. پست ارسالی شما گیف نیست.";

    const NOT_FORWARD_POST = "پستی فروارد نکردید. پست باید فروارد شده باشد.";
    const ARE_YOU_SURE_ADD_ADMIN = "آیا از افزودن ادمین زیر مطمئن هستید؟" . "\n";
    const ADMIN_ADDED_SUCCESS = "ادمین با موفقیت افزوده شد.";
    const NOT_CONFIRMED = "هنوز تایید نشده است.";

    const HELP = "یک متن راهنمایی گذاشته شود.";
    const CONTACT_US = "متن ارتباط با ما گذاشته شود.";

}