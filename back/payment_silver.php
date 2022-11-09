<div id="paypal-button-container-P-3LM43836PG6867134MNUUXRA"></div>

<script src="https://www.paypal.com/sdk/js?client-id=ASwXZZNQsGMlFqJbQIyowPWPPTYTiQ27SboLoPt0nTtUQv5tISR5pLnC3rieyY7jsiMcJhdYMMWntRrH&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>

<script>
  paypal.Buttons({
    style: {
      shape: 'rect',
      color: 'silver',
      layout: 'vertical',
      label: 'subscribe'
    },
    createSubscription: function(data, actions) {
      return actions.subscription.create({
        /* Creates the subscription */
        plan_id: 'P-3LM43836PG6867134MNUUXRA'
      });
    },
    onApprove: function(data, actions) {
      alert(data.subscriptionID); // You can add optional success message for the subscriber here
    }
  }).render('#paypal-button-container-P-3LM43836PG6867134MNUUXRA'); // Renders the PayPal button
</script>