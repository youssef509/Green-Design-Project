$(document).ready(function() {
    var alert_for_done = '<?php echo $alert_for_done; ?>';
    if (alert_for_done != '') {
      var alert_class = '';
      if (alert_for_done.indexOf('alert-success') != -1) {
        alert_class = 'notification-success';
      } else if (alert_for_done.indexOf('alert-danger') != -1) {
        alert_class = 'notification-danger';
      } else if (alert_for_done.indexOf('alert-info') != -1) {
        alert_class = 'notification-info';
      }
      var notification = '<div class="notification ' + alert_class + '"><span class="notification-close">×</span><div class="notification-icon"><svg class="bi bi-check-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 0a8 8 0 100 16A8 8 0 008 0zm3.28 6.47L6.75 9.66 4.72 7.47a.5.5 0 10-.64.76l2.5 2a.5.5 0 00.64 0l4.5-4.5a.5.5 0 00-.64-.76z" clip-rule="evenodd"/></svg></div><div class="notification-text">' + alert_for_done + '</div></div>';
      $('body').prepend(notification);
      $('.notification-close').click(function() {
        $(this).parent().fadeOut(200);
      });
    }
  });
  