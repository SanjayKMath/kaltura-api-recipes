Rails.application.routes.draw do
  get 'index' => 'main#index'
  get 'KalturaEventNotificationTemplateListResponse' => 'main#KalturaEventNotificationTemplateListResponse'
  get 'KalturaEventNotificationTemplate' => 'main#KalturaEventNotificationTemplate'
  get 'AddEventNotificationTemplateForm' => 'main#AddEventNotificationTemplateForm'
  get 'CloneEventNotificationTemplate' => 'main#CloneEventNotificationTemplate'
  get 'KalturaPermissionListResponse' => 'main#KalturaPermissionListResponse'
  get 'KalturaPermission' => 'main#KalturaPermission'
  post 'HandleHTTPNotifications' => 'main#HandleHTTPNotifications'
  post 'listTemplatesEventNotificationTemplate' => 'main#listTemplatesEventNotificationTemplate'
  post 'cloneEventNotificationTemplate' => 'main#cloneEventNotificationTemplate'
  post 'listEventNotificationTemplate' => 'main#listEventNotificationTemplate'
  post 'listPermission' => 'main#listPermission'
  root 'main#index'
end
