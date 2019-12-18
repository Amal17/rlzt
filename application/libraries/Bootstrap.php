<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Bootstrap
{

/**
 * Show alert for warning/danger/success/info message
 * Based on Bootstrap alert component for css styling
 * Bootstrap @version 3.3.7
 *
 * @author Fathy AR (https://github.com/orangtanah)
 * @param string $type = 'success', 'warning', 'alert', 'info'
 * @param string $message = 'message u wanna send'
 * @param boolean $dismiss = default value is true, it will add dismiss button to alert
 * @return string $document = html string
 * @source https://github.com/orangtanah/alert_bootstrap
 */
  public function alert_bootstrap( $type, $message, $dismiss = TRUE )
  {
    $div_dismiss = ( $dismiss ) ? " alert-dismissible" : "";
    $btn_dismiss = ( $dismiss ) ? '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' : "";
    $document = '<div class="alert alert-'.$type.''.$div_dismiss.'" role="alert">'.$btn_dismiss.''.$message.'</div>';
    return $document;
  }

  public function skeleton_bootstrap()
  {
    $skeleton = '<div class="skeleton-wrapper"><div class="skeleton-wrapper-inner"><div class="skeleton-wrapper-body"><div class="skeleton-avatar"></div><div class="skeleton-author"></div><div class="skeleton-label"></div><div class="skeleton-content-1"></div><div class="skeleton-content-2"></div><div class="skeleton-content-3"></div></div></div></div>';
    return $skeleton;
  }

}
