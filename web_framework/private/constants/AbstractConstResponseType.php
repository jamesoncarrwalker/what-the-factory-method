<?php
namespace constants;
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 12/10/2019
 * Time: 14:14
 */
abstract class AbstractConstResponseType {

    const WEB_PAGE = 'HTML';
    const AJAX = 'JSON_AJAX';
    const API_PUBLIC_JSON = 'JSON_PUBLIC';
    const API_PRIVATE_JSON = 'JSON_PRIVATE';
    const APP = 'JSON_APP';

    const UNKNOWN = "UNKNOWN_TYPE";
}