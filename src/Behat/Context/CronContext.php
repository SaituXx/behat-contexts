<?php

namespace Metadrop\Behat\Context;

class CronContext extends RawDrupalContext {

  /**
   * @Given I run elysia cron
   *
   * Run elysia-cron.
   */
  public function iRunElysiaCron() {
    $this->getCore()->runElysiaCron();
  }

  /**
   * @Given I run the elysia cron :job job
   *
   * Run elysia-cron-job.
   */
  public function iRunElysiaCronJob($job) {
    // @NOTE We force it
    $this->getCore()->runElysiaCronJob($job);
  }

  /**
   * @Given I run the cron of Search API
   *
   * Run search-api-cron
   */
  public function iRunTheCronOfSearchApi() {
    $this->getCore()->runModuleCron('search_api');
  }

  /**
   * @Given I run the cron of Search API Solr
   *
   * Run search-api-solr-cron
   */
  public function iRunTheCronOfSearchApiSolr() {
    $this->getCore()->runModuleCron('search_api_solr');
  }

}
