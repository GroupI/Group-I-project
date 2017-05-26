<?php

/**
 * Today in History.
 * This widget shows an event that happened on today's date throughout the history.
 * The events are retrieved from Wikipedia via an api called "history.muffinlabs.com".
 * The widget is dynamic and shows a different event every time a new request is made.
 * Hotlinks to Wikipedia are included when available.
 */
class TodayInHistory_model extends Model
{

    private $hist_decoded;
    private $hist;
    private $key;

    /**
     * TodayinHistory constructor.
     * Gets info from a json-formatted url using today's date and decodes it.
     */
    function __construct()
    {
        parent::__construct();
        $url = "http://history.muffinlabs.com/date/" . date("n") . "/" . date("j");
        $json = file_get_contents($url);
        $this->hist_decoded = json_decode($json);

    }

    /**
     * Generates a random key within the limits of the events array.
     */
    function generateRandomKey()
    {
        $keys = array_keys($this->hist_decoded->data->Events);
        $amount = end($keys);
        $this->key = rand(0, $amount);
    }


    /**
     * Gets the necessary information from the json text and encodes it into a json variable.
     * @return string
     */
    function passJson()
    {
        $this->generateRandomKey();
        $event = $this->hist_decoded->data->Events[$this->key];
        $this->hist = json_encode(array(
            "text" => $event->html,
            "year" => $event->year,
            "date" => $this->hist_decoded->date
        ));

        echo ($this->hist);

    }

}