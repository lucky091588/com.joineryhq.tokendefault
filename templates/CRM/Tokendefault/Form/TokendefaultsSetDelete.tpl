<div class="crm-block crm-form-block crm-custom-deletetokendefault-form-block">
  <div class="crm-submit-buttons">
     {include file="CRM/common/formButtons.tpl" location="top"}
  </div>
      <div class="messages status no-popup">
             <div class="icon inform-icon"></div>
            {ts 1=$title}WARNING: Deleting this token default set will result in the loss of all '%1' token default.{/ts} {ts}This action cannot be undone.{/ts} {ts}Do you want to continue?{/ts}
      </div>
  <div class="crm-submit-buttons">
     {include file="CRM/common/formButtons.tpl" location="bottom"}
  </div>
</div>
