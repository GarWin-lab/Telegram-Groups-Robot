<?php


namespace MohandesPlusBot\Enums;


class States
{
    const JUST_STARTED = "JUST_STARTED";
    const ADD_POST = "ADD_POST";

    const START_SEND_GIF = "START_SEND_GIF";
    const START_SEND_PHOTO = "START_SEND_PHOTO";
    const START_SEND_VIDEO = "START_SEND_VIDEO";
    const START_SEND_CONTEXT = "START_SEND_CONTEXT";
    const START_FORWARD_POST = "START_FORWARD_POST";
    const START_ADD_CHANNEL = "START_ADD_CHANNEL";
    const START_REMOVE_CHANNEL = "START_REMOVE_CHANNEL";
    const START_SHOW_ADMIN = "START_SHOW_ADMIN";
    const START_ADD_ADMIN = "START_ADD_ADMIN";
    const START_REMOVE_ADMIN = "START_REMOVE_ADMIN";
    const START_POST_MANAGEMENT = "START_POST_MANAGEMENT";

    const END_REMOVE_CHANNEL = "END_REMOVE_CHANNEL";
    const TYPE_SAVED = "TYPE_SAVED";
    const CHANNEL_SAVED = "CHANNEL_SAVED";
    const CONTEXT_SAVED = "CONTEXT_SAVED";
    const GIF_SAVED = "GIF_SAVED";
    const VIDEO_SAVED = "VIDEO_SAVED";
    const PHOTO_SAVED = "PHOTO_SAVED";
    const YEAR_SAVED = "YEAR_SAVED";
    const MONTH_SAVED = "MONTH_SAVED";
    const DATE_SAVED = "DATE_SAVED";
    const HOUR_SAVED = "HOUR_SAVED";
    const MINUTE_SAVED = "MINUTE_SAVED";
    const POST_INFO_SAVED = "POST_INFO_SAVED";
    const ADMIN_SAVED = "ADMIN_SAVED";
    const REMOVE_ADMIN_SAVED = "REMOVE_ADMIN_SAVED";

    const REMOVE_CHANNEL_CONFIRMATION = "REMOVE_CHANNEL_CONFIRMATION";
    const ADMIN_MANAGEMENT = "ADMIN_MANAGEMENT";

    const ENTER_CONTEXT = "ENTER_CONTEXT";
    const CHOOSE_CHANNEL = "CHOOSE_CHANNEL";


    const MANAGEMENT_TOOLS = "MANAGEMENT_TOOLS";
    const CHANNEL_MANAGEMENT = "CHANNEL_MANAGEMENT";
    const CHANNEL_MANAGEMENT_TYPE_SAVED = "CHANNEL_MANAGEMENT_TYPE_SAVED";
    const ADMIN_MANAGEMENT_TYPE_SAVED = "ADMIN_MANAGEMENT_TYPE_SAVED";
    const POST_MANAGEMENT_TYPE_SAVED = "ADMIN_MANAGEMENT_TYPE_SAVED";

    const IS_ACCEPTED = "IS_ACCEPTED";

    const BACK_TO_START = "BACK_TO_START";

    const ADDED_BY_CREATOR = "ADDED_BY_CREATOR";


}