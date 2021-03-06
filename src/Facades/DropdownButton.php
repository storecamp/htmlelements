<?php
/**
 * storecamp\htmlelements DropdownButton facade
 */

namespace storecamp\htmlelements\Facades;

/**
 * Facade for DropdownButton class
 *
 * @package storecamp\htmlelements\Facades
 * @see     DropdownButton
 */
class DropdownButton extends htmlelementsFacade
{
    const DIVIDER = "<li class='divider'></li>";
    const PRIMARY = 'btn-primary';
    const DANGER = 'btn-danger';
    const WARNING = 'btn-warning';
    const SUCCESS = 'btn-success';
    const INFO = 'btn-info';
    const LARGE = 'btn-lg';
    const SMALL = 'btn-sm';
    const EXTRA_SMALL = 'btn-xs';

    /**
     * {@inheritdoc}
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'htmlelements::dropdownbutton';
    }
}
