<?php

$REGISTER_LTI2 = array(
"name" => "Forward",
"FontAwesome" => "fa-fast-forward",
"short_name" => "Forward",
"description" => "Forward the post-launch data to a Django app using a JWT.  See also the 'djtest'
repository.",
    "messages" => array("launch", "launch_grade"),
    "privacy_level" => "anonymous",  // anonymous, name_only, public
    "license" => "Apache",
    "languages" => array(
        "English"
    ),
    "analytics" => array(
        "internal"
    ),
    "tool_phase" => "emerging",
    "source_url" => "https://github.com/tsugiproject/forward",
    // For now Tsugi tools delegate this to /lti/store
    "placements" => array(
        /*
        "course_navigation", "homework_submission",
        "course_home_submission", "editor_button",
        "link_selection", "migration_selection", "resource_selection",
        "tool_configuration", "user_navigation"
        */
    ),
    "screen_shots" => array(
/*
        "store/screen-01.png",
        "store/screen-02.png",
        "store/screen-03.png",
        "store/screen-views.png",
        "store/screen-analytics.png"
*/
    )
);
