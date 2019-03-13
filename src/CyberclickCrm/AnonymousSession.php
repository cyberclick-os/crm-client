<?php

namespace CyberclickCrm;

class AnonymousSession implements SessionInterface {

  /**
   * @return array
   */
  public function getRequestParameters() {
    return array();
  }
}
