<?php

class Recurly_CouponRedemption extends Recurly_Resource
{
  protected static $_writeableAttributes;
  protected static $_nestedAttributes;
  protected static $_redeemUrl;

  public static function init()
  {
    Recurly_CouponRedemption::$_writeableAttributes = array('account_code','currency');
    Recurly_CouponRedemption::$_nestedAttributes = array('account');
  }

  public static function get($accountCode, $client = null) {
    return Recurly_Base::_get(Recurly_CouponRedemption::uriForAccount($accountCode), $client);
  }

  public function redeemCoupon() {
    $this->_save(Recurly_Client::PUT, $this->_redeemUrl);
  }

  public function delete($accountCode = null) {
    return Recurly_Resource::_delete($this->uri($accountCode));
  }
  public static function deleteCouponRedemption($accountCode) {
    return Recurly_CouponRedemption::uriForAccount($accountCode);
  }

  protected function uri($accountCode = null) {
    if (!empty($this->_href))
      return $this->getHref();
    else if(!empty($accountCode))
      return Recurly_CouponRedemption::uriForAccount($accountCode);
		else
			return false;
  }
  protected static function uriForAccount($accountCode) {
    return Recurly_Client::PATH_ACCOUNTS . '/' . rawurlencode($accountCode) . Recurly_Client::PATH_COUPON;
  }

  protected function getNodeName() {
    return 'redemption';
  }
  protected function getWriteableAttributes() {
    return Recurly_CouponRedemption::$_writeableAttributes;
  }
}

Recurly_CouponRedemption::init();
