<div id="paypal-button-container-P-5W678559MC886974EMNUVRGA"></div>

<script src="https://www.paypal.com/sdk/js?client-id=ASwXZZNQsGMlFqJbQIyowPWPPTYTiQ27SboLoPt0nTtUQv5tISR5pLnC3rieyY7jsiMcJhdYMMWntRrH&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>

<script>
  paypal.Buttons({
    style: {
      shape: 'rect',
      color: 'gold',
      layout: 'vertical',
      label: 'subscribe'
    },
    createSubscription: function(data, actions) {
      return actions.subscription.create({
        /* Creates the subscription */
        plan_id: 'P-5W678559MC886974EMNUVRGA'
      });
    },
    onApprove: function(data, actions) {
      alert(data.subscriptionID); // You can add optional success message for the subscriber here
    }
  }).render('#paypal-button-container-P-5W678559MC886974EMNUVRGA'); // Renders the PayPal button
</script>