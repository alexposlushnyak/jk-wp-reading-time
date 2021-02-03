<?php defined('ABSPATH') || exit;

class jk_wp_reading_time
{

    public $divisor = 200;

    public function get_reading_time($content)
    {

        $word_count = str_word_count(strip_tags($content));

        $readingtime = ceil($word_count / $this->divisor);

        if ($readingtime == 1) :

            $timer = esc_html__(' minute', '@@textdomain');

        else :

            $timer = esc_html__(' minutes', '@@textdomain');

        endif;

        $totalreadingtime = $readingtime . $timer;

        return $totalreadingtime;

    }

}
