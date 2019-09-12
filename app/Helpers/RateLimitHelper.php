<?php

namespace App\Helpers;

use Storage;

class RateLimitHelper
{

    public static function throttle($key, $maxAttempts, $ttlHours=24)
    {
        if (!Storage::exists($key))
        {
            Storage::put($key, date('Y-m-d H:i:s') . PHP_EOL . 1);

            return 1;
        }

        $contents = Storage::get($key);

        $timestampString = date('Y-m-d H:i:s', strtotime(explode(PHP_EOL, $contents)[0]));
        $cacheTimestamp = new \Datetime($timestampString);

        $timeDiff = $cacheTimestamp->diff(new \Datetime());
        $hoursDiff = $timeDiff->d * 24 + $timeDiff->h;

        if ($hoursDiff >= $ttlHours)
        {
            $timestampString = date('Y-m-d H:i:s');
            Storage::put($key, $timestampString . PHP_EOL . 1);

            $currentAttempts = 1;
        }
        else
        {
            $currentAttempts = explode(PHP_EOL, $contents)[1];
            if ($currentAttempts >= $maxAttempts)
            {
                return false;
            }
            else
            {
                $currentAttempts++;
                Storage::put($key, $timestampString . PHP_EOL . $currentAttempts);
            }
        }

        return $currentAttempts;
    }

}
