<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

/**
 * sfValidatorMobileEmail validates mobile emails.
 *
 * @package    OpenPNE
 * @subpackage validator
 * @author     Kousuke Ebihara <ebihara@tejimaya.com>
 */
class sfValidatorMobileEmail extends sfValidatorEmail
{
  /**
   * @see sfValidatorRegex
   */
  protected function configure($options = array(), $messages = array())
  {
    parent::configure($options, $messages);

    // the $str (domains) will appear in a regexp, some special character should be quoted.
    $filter = create_function('$value', 'return preg_quote($value, \'/\');');
    $str = join('|', array_filter(opToolkit::getMobileMailAddressDomains(), $filter));

    /*
     Validate Chinese Mobile Email Address.
     If user want to add a new address pattern, should edit BOTH here and
     opToolkit.class.php.
     DO NOT add an entry in mobile_mail_domain.yml.
    */
    
    $mail_cm = '(134|135|136|137|138|139|150|151|152|157|158|159|187|188|147)[0-9]{8}@139\.com';
    $mail_cu = '(130|131|132|155|156|185|186)[0-9]{8}@wo\.com\.cn';
    $mail_ct = '(133|153|180|189)[0-9]{8}@189\.cn';

    $this->setOption('pattern', '/^'.$mail_cm.'|'.$mail_cu.'|'.$mail_ct.'|([^@\s]+)@('.$str.')$/i');
  }
}
