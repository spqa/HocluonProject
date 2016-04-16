<?php
/**
 * Created by PhpStorm.
 * User: super
 * Date: 4/14/2016
 * Time: 10:22 AM
 */
namespace App;
use Illuminate\Pagination\BootstrapThreePresenter;

class Pagination extends BootstrapThreePresenter{
    public function render()
    {
        if (! $this->hasPages())
            return '';
        return sprintf(
            '<ul class="pagination">%s %s %s</ul>',
            $this->getPreviousButton(),
            $this->getLinks(),
            $this->getNextButton()
        );
    }

    protected function getAvailablePageWrapper($url, $page, $rel = null)
    {
        return '<li><a class="page previous" href="'.$url.'">'.$page.'</a></li>';
    }

    protected function getActivePageWrapper($text)
    {
        return '<li><a class="page active" href="javascript:void(0)">'.$text.'</a></li>';
    }



    protected function getDisabledTextWrapper($text)
    {
        return '<li><a class="page" href="javascript:void(0)">'.$text.'</a></li>';
    }
    
    protected function getDots()
    {
        return $this->getDisabledTextWrapper('&hellip;');
    }
}