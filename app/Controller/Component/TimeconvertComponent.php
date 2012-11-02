<?php
/**
 * TimeConvert Component: Converts between different formats for date/timestamps
 *
 * This is a simple component which makes it really easy to convert a date or
 * timestamp between different formats (SQL, Unixtime and Cake-style array).
 * One main advantage is that you don’t need to specify which format the data
 * is in when you call the desired conversion method — the component figures
 * it out on its own.
 *
 * PHP version 4
 *
 * Copyright (c) 2010 Dave Hensley
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.

 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @author Dave Hensley
 * @copyright Dave Hensley 2010
 * @link http://dave.ag/time-convert-component/
 * @package TimeConvert
 * @version 1.0
 */

/**
 * TimeConvert Component
 *
 * Provides 3 methods for easily converting date/timestamps to different formats. 
 *
 * @package TimeConvert
 */
class TimeConvertComponent extends Object {

/**
 * Convert to Utime
 *
 * Convert any datetime format to Unixtime (seconds since January 1, 1970)
 *
 * @access public
 * @param mixed The time to convert (can be a string, array, or Unixtime)
 * @return int The number of seconds since 1970-01-01
 */
  function toUnixtime($time) {
    # Timestamp appears to already be in Unixtime format
    if (is_numeric($time)) {
      return $time;
    }

    # Timestamp appears to be a CakePHP-style array
    if (is_array($time)) {
      return strtotime(sprintf(
        ’%u-%u-%u %u:%02u %s‘,
        $time['year'],
        $time['month'],
        $time['day'],
        $time['hour'],
        $time['min'],
        $time['meridian']
      ));
    }

    # Timestamp is a SQL or other string. Hopefully strtotime() will be able to figure it out.
    return strtotime($time);
  }

/**
 * Convert to SQL
 *
 * Convert any datetime format to standard SQL (YYYY-MM-DD hh:mm:ss)
 *
 * @access public
 * @param mixed The time to convert (can be a string, array, or Unixtime)
 * @return string The time formatted as a SQL string
 */
  function toSQL($time) {
    return date(‘Y-m-d H:i:s‘, $this->toUnixtime($time));
  }

/**
 * Convert to array
 *
 * Convert any datetime format to a CakePHP-style array
 *
 * @access public
 * @param mixed The time to convert (can be a string, array, or Unixtime)
 * @return array The time formatted as a CakePHP-style array
 */
  function toArray($time) {
    $unixtime = $this->toUnixtime($time);

    return array(
      ’year‘     => date(‘Y‘, $unixtime),
      ’month‘    => date(‘m‘, $unixtime),
      ’day‘      => date(‘d‘, $unixtime),
      ’hour‘     => date(‘h‘, $unixtime),
      ’min‘      => date(‘i‘, $unixtime),
      ’meridian‘ => date(‘a‘, $unixtime)
    );
  }
}
?>
