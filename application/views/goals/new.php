<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
  <div class="max-w-300 margin-auto">
    <div class="form-group text-center">
      <h3>Add New Goal</h3>
    </div>
    <div class="panel panel-default max-w-300">
      <div class="panel-body">
      <?= form_open('goals/new'); ?>
        <dl class="form-group">
          <dt><label for="goal_name">Name</label></dt>
          <dd><textarea class="form-control input-block unresized-x" tabindex="1" spellcheck="false" autocomplete="off" name="goal_name" type="text" placeholder="goal name" rows="1"></textarea></dd>
        </dl>
        <dl class="form-group">
          <dt><label for="goal_description">Description</label></dt>
          <dd><textarea class="form-control input-block unresized-x" tabindex="2" spellcheck="false" autocomplete="off" name="goal_description" placeholder="add a bit description" rows="3"></textarea></dd>
        </dl>
        <dl class="form-group">
          <dt><label for="goal_duedate">Due date</label></dt>
          <dd id="goal_duedate_datepicker"><input class="form-control input-block" tabindex="3" spellcheck="false" autocomplete="off" name="goal_duedate" type="text" placeholder="add due date(optional)"></dd>
        </dl>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="public" value="public"> Set this goal to public <i class="fa fa-info-circle" data-toggle="popover" data-placement="top" title="Set goal to public" data-trigger="hover" data-content="Public goals can be accessed by everyone and it will be shown on your profile page."></i>
          </label>
        </div>
        <dl class="form-group margin-top-20 margin-bottom-10">
          <button type="submit" class="btn btn-default btn-block waves-effect" tabindex="4">Add</button>
        </dl>
      <?= form_close() ?>
      </div>
    </div>
    <?= $err = (validation_errors()!='') ? $this->bootstrap->alert_bootstrap('danger',validation_errors(),true):''; ?>
  </div>
</div>

<script>$('#goal_duedate_datepicker').datepicker({maxViewMode:3,todayBtn:"linked",clearBtn:true,todayHighlight:true});</script>
