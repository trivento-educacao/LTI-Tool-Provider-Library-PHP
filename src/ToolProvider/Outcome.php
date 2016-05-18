<?php

namespace IMSGlobal\LTI\ToolProvider;

/**
 * Class to represent an outcome
 *
 * @author  Stephen P Vickers <svickers@imsglobal.org>
 * @copyright  IMS Global Learning Consortium Inc
 * @date  2016
 * @version 3.0.0
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3
 */
class Outcome
{

/**
 * Language value.
 *
 * @var string $language
 */
    public $language = null;
/**
 * Outcome status value.
 *
 * @var string $status
 */
    public $status = null;
/**
 * Outcome date value.
 *
 * @var datetime $date
 */
    public $date = null;
/**
 * Outcome type value.
 *
 * @var string $type
 */
    public $type = null;
/**
 * Outcome data source value.
 *
 * @var string $dataSource
 */
    public $dataSource = null;

/**
 * Outcome value.
 *
 * @var string $value
 */
    private $value = null;

/**
 * Class constructor.
 *
 * @param string $value     Outcome value (optional, default is none)
 */
    public function __construct($value = null)
    {

        $this->value = $value;
        $this->language = 'en-US';
        $this->date = gmdate('Y-m-d\TH:i:s\Z', time());
        $this->type = 'decimal';

    }

/**
 * Get the outcome value.
 *
 * @return string Outcome value
 */
    public function getValue()
    {

        return $this->value;

    }

/**
 * Set the outcome value.
 *
 * @param string $value  Outcome value
 */
    public function setValue($value)
    {

        $this->value = $value;

    }

}