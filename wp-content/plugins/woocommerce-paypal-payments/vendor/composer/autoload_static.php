<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd327382102db5a22440815e53142caa
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'D' => 
        array (
            'Dhii\\Wp\\Containers\\' => 19,
            'Dhii\\Util\\String\\' => 17,
            'Dhii\\Modular\\Module\\' => 20,
            'Dhii\\Factory\\' => 13,
            'Dhii\\Exception\\' => 15,
            'Dhii\\Data\\Container\\' => 20,
            'Dhii\\Container\\' => 15,
            'Dhii\\Collection\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/service-provider/src',
        ),
        'Dhii\\Wp\\Containers\\' => 
        array (
            0 => __DIR__ . '/..' . '/dhii/wp-containers/src',
        ),
        'Dhii\\Util\\String\\' => 
        array (
            0 => __DIR__ . '/..' . '/dhii/stringable-interface/src',
        ),
        'Dhii\\Modular\\Module\\' => 
        array (
            0 => __DIR__ . '/..' . '/dhii/module-interface/src',
        ),
        'Dhii\\Factory\\' => 
        array (
            0 => __DIR__ . '/..' . '/dhii/factory-interface/src',
        ),
        'Dhii\\Exception\\' => 
        array (
            0 => __DIR__ . '/..' . '/dhii/exception-interface/src',
        ),
        'Dhii\\Data\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/dhii/data-container-interface/src',
        ),
        'Dhii\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/dhii/containers/src',
        ),
        'Dhii\\Collection\\' => 
        array (
            0 => __DIR__ . '/..' . '/dhii/collections-interface/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WooCommerce\\PayPalCommerce\\AdminNotices\\AdminNotices' => __DIR__ . '/../..' . '/modules/ppcp-admin-notices/src/class-adminnotices.php',
        'WooCommerce\\PayPalCommerce\\AdminNotices\\Entity\\Message' => __DIR__ . '/../..' . '/modules/ppcp-admin-notices/src/Entity/class-message.php',
        'WooCommerce\\PayPalCommerce\\AdminNotices\\Renderer\\Renderer' => __DIR__ . '/../..' . '/modules/ppcp-admin-notices/src/Renderer/class-renderer.php',
        'WooCommerce\\PayPalCommerce\\AdminNotices\\Renderer\\RendererInterface' => __DIR__ . '/../..' . '/modules/ppcp-admin-notices/src/Renderer/class-rendererinterface.php',
        'WooCommerce\\PayPalCommerce\\AdminNotices\\Repository\\Repository' => __DIR__ . '/../..' . '/modules/ppcp-admin-notices/src/Repository/class-repository.php',
        'WooCommerce\\PayPalCommerce\\AdminNotices\\Repository\\RepositoryInterface' => __DIR__ . '/../..' . '/modules/ppcp-admin-notices/src/Repository/class-repositoryinterface.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\ApiModule' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/class-apimodule.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Authentication\\Bearer' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Authentication/class-bearer.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Authentication\\ConnectBearer' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Authentication/class-connectbearer.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Authentication\\PayPalBearer' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Authentication/class-paypalbearer.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Endpoint\\IdentityToken' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Endpoint/class-identitytoken.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Endpoint\\LoginSeller' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Endpoint/class-loginseller.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Endpoint\\OrderEndpoint' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Endpoint/class-orderendpoint.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Endpoint\\PartnerReferrals' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Endpoint/class-partnerreferrals.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Endpoint\\PartnersEndpoint' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Endpoint/class-partnersendpoint.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Endpoint\\PaymentTokenEndpoint' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Endpoint/class-paymenttokenendpoint.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Endpoint\\PaymentsEndpoint' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Endpoint/class-paymentsendpoint.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Endpoint\\RequestTrait' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Endpoint/class-requesttrait.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Endpoint\\WebhookEndpoint' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Endpoint/class-webhookendpoint.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\Address' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-address.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\Amount' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-amount.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\AmountBreakdown' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-amountbreakdown.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\ApplicationContext' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-applicationcontext.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\Authorization' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-authorization.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\AuthorizationStatus' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-authorizationstatus.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\CardAuthenticationResult' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-cardauthenticationresult.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\Item' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-item.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\Money' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-money.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\Order' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-order.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\OrderStatus' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-orderstatus.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\Patch' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-patch.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\PatchCollection' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-patchcollection.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\Payee' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-payee.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\Payer' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-payer.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\PayerName' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-payername.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\PayerTaxInfo' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-payertaxinfo.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\PaymentMethod' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-paymentmethod.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\PaymentSource' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-paymentsource.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\PaymentSourceCard' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-paymentsourcecard.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\PaymentSourceWallet' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-paymentsourcewallet.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\PaymentToken' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-paymenttoken.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\Payments' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-payments.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\Phone' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-phone.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\PhoneWithType' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-phonewithtype.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\PurchaseUnit' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-purchaseunit.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\Refund' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-refund.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\SellerStatus' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-sellerstatus.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\SellerStatusProduct' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-sellerstatusproduct.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\Shipping' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-shipping.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\Token' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-token.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Entity\\Webhook' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-webhook.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Exception\\NotFoundException' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Exception/class-notfoundexception.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Exception\\PayPalApiException' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Exception/class-paypalapiexception.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Exception\\RuntimeException' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Exception/class-runtimeexception.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Factory\\AddressFactory' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Factory/class-addressfactory.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Factory\\AmountFactory' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Factory/class-amountfactory.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Factory\\ApplicationContextFactory' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Factory/class-applicationcontextfactory.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Factory\\AuthorizationFactory' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Factory/class-authorizationfactory.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Factory\\CaptureFactory' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Factory/class-capturefactory.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Factory\\ItemFactory' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Factory/class-itemfactory.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Factory\\OrderFactory' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Factory/class-orderfactory.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Factory\\PatchCollectionFactory' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Factory/class-patchcollectionfactory.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Factory\\PayeeFactory' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Factory/class-payeefactory.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Factory\\PayerFactory' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Factory/class-payerfactory.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Factory\\PaymentSourceFactory' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Factory/class-paymentsourcefactory.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Factory\\PaymentTokenFactory' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Factory/class-paymenttokenfactory.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Factory\\PaymentsFactory' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Factory/class-paymentsfactory.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Factory\\PurchaseUnitFactory' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Factory/class-purchaseunitfactory.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Factory\\SellerStatusFactory' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Factory/class-sellerstatusfactory.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Factory\\ShippingFactory' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Factory/class-shippingfactory.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Factory\\WebhookFactory' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Factory/class-webhookfactory.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Helper\\Cache' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Helper/class-cache.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Helper\\DccApplies' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Helper/class-dccapplies.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Helper\\ErrorResponse' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Helper/class-errorresponse.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Repository\\ApplicationContextRepository' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Repository/class-applicationcontextrepository.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Repository\\CartRepository' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Repository/class-cartrepository.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Repository\\PartnerReferralsData' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Repository/class-partnerreferralsdata.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Repository\\PayPalRequestIdRepository' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Repository/class-paypalrequestidrepository.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Repository\\PayeeRepository' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Repository/class-payeerepository.php',
        'WooCommerce\\PayPalCommerce\\ApiClient\\Repository\\PurchaseUnitRepositoryInterface' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Repository/class-purchaseunitrepositoryinterface.php',
        'WooCommerce\\PayPalCommerce\\Button\\Assets\\DisabledSmartButton' => __DIR__ . '/../..' . '/modules/ppcp-button/src/Assets/class-disabledsmartbutton.php',
        'WooCommerce\\PayPalCommerce\\Button\\Assets\\SmartButton' => __DIR__ . '/../..' . '/modules/ppcp-button/src/Assets/class-smartbutton.php',
        'WooCommerce\\PayPalCommerce\\Button\\Assets\\SmartButtonInterface' => __DIR__ . '/../..' . '/modules/ppcp-button/src/Assets/class-smartbuttoninterface.php',
        'WooCommerce\\PayPalCommerce\\Button\\ButtonModule' => __DIR__ . '/../..' . '/modules/ppcp-button/src/class-buttonmodule.php',
        'WooCommerce\\PayPalCommerce\\Button\\Endpoint\\ApproveOrderEndpoint' => __DIR__ . '/../..' . '/modules/ppcp-button/src/Endpoint/class-approveorderendpoint.php',
        'WooCommerce\\PayPalCommerce\\Button\\Endpoint\\ChangeCartEndpoint' => __DIR__ . '/../..' . '/modules/ppcp-button/src/Endpoint/class-changecartendpoint.php',
        'WooCommerce\\PayPalCommerce\\Button\\Endpoint\\CreateOrderEndpoint' => __DIR__ . '/../..' . '/modules/ppcp-button/src/Endpoint/class-createorderendpoint.php',
        'WooCommerce\\PayPalCommerce\\Button\\Endpoint\\DataClientIdEndpoint' => __DIR__ . '/../..' . '/modules/ppcp-button/src/Endpoint/class-dataclientidendpoint.php',
        'WooCommerce\\PayPalCommerce\\Button\\Endpoint\\EndpointInterface' => __DIR__ . '/../..' . '/modules/ppcp-button/src/Endpoint/class-endpointinterface.php',
        'WooCommerce\\PayPalCommerce\\Button\\Endpoint\\RequestData' => __DIR__ . '/../..' . '/modules/ppcp-button/src/Endpoint/class-requestdata.php',
        'WooCommerce\\PayPalCommerce\\Button\\Exception\\RuntimeException' => __DIR__ . '/../..' . '/modules/ppcp-button/src/Exception/class-runtimeexception.php',
        'WooCommerce\\PayPalCommerce\\Button\\Helper\\EarlyOrderHandler' => __DIR__ . '/../..' . '/modules/ppcp-button/src/Helper/class-earlyorderhandler.php',
        'WooCommerce\\PayPalCommerce\\Button\\Helper\\MessagesApply' => __DIR__ . '/../..' . '/modules/ppcp-button/src/Helper/class-messagesapply.php',
        'WooCommerce\\PayPalCommerce\\Button\\Helper\\MessagesDisclaimers' => __DIR__ . '/../..' . '/modules/ppcp-button/src/Helper/class-messagesdisclaimers.php',
        'WooCommerce\\PayPalCommerce\\Button\\Helper\\ThreeDSecure' => __DIR__ . '/../..' . '/modules/ppcp-button/src/Helper/class-threedsecure.php',
        'WooCommerce\\PayPalCommerce\\Compat\\CompatModule' => __DIR__ . '/../..' . '/modules/ppcp-compat/src/class-compatmodule.php',
        'WooCommerce\\PayPalCommerce\\Compat\\PPEC\\DeactivateNote' => __DIR__ . '/../..' . '/modules/ppcp-compat/src/PPEC/class-deactivatenote.php',
        'WooCommerce\\PayPalCommerce\\Compat\\PPEC\\MockGateway' => __DIR__ . '/../..' . '/modules/ppcp-compat/src/PPEC/class-mockgateway.php',
        'WooCommerce\\PayPalCommerce\\Compat\\PPEC\\PPECHelper' => __DIR__ . '/../..' . '/modules/ppcp-compat/src/PPEC/class-ppechelper.php',
        'WooCommerce\\PayPalCommerce\\Compat\\PPEC\\SettingsImporter' => __DIR__ . '/../..' . '/modules/ppcp-compat/src/PPEC/class-settingsimporter.php',
        'WooCommerce\\PayPalCommerce\\Compat\\PPEC\\SubscriptionsHandler' => __DIR__ . '/../..' . '/modules/ppcp-compat/src/PPEC/class-subscriptionshandler.php',
        'WooCommerce\\PayPalCommerce\\Onboarding\\Assets\\OnboardingAssets' => __DIR__ . '/../..' . '/modules/ppcp-onboarding/src/Assets/class-onboardingassets.php',
        'WooCommerce\\PayPalCommerce\\Onboarding\\Endpoint\\LoginSellerEndpoint' => __DIR__ . '/../..' . '/modules/ppcp-onboarding/src/Endpoint/class-loginsellerendpoint.php',
        'WooCommerce\\PayPalCommerce\\Onboarding\\Environment' => __DIR__ . '/../..' . '/modules/ppcp-onboarding/src/class-environment.php',
        'WooCommerce\\PayPalCommerce\\Onboarding\\OnboardingModule' => __DIR__ . '/../..' . '/modules/ppcp-onboarding/src/class-onboardingmodule.php',
        'WooCommerce\\PayPalCommerce\\Onboarding\\Onboarding_REST_Controller' => __DIR__ . '/../..' . '/modules/ppcp-onboarding/src/class-onboarding-rest-controller.php',
        'WooCommerce\\PayPalCommerce\\Onboarding\\Render\\OnboardingRenderer' => __DIR__ . '/../..' . '/modules/ppcp-onboarding/src/Render/class-onboardingrenderer.php',
        'WooCommerce\\PayPalCommerce\\Onboarding\\State' => __DIR__ . '/../..' . '/modules/ppcp-onboarding/src/class-state.php',
        'WooCommerce\\PayPalCommerce\\PluginModule' => __DIR__ . '/../..' . '/src/class-pluginmodule.php',
        'WooCommerce\\PayPalCommerce\\Session\\Cancellation\\CancelController' => __DIR__ . '/../..' . '/modules/ppcp-session/src/Cancellation/class-cancelcontroller.php',
        'WooCommerce\\PayPalCommerce\\Session\\Cancellation\\CancelView' => __DIR__ . '/../..' . '/modules/ppcp-session/src/Cancellation/class-cancelview.php',
        'WooCommerce\\PayPalCommerce\\Session\\SessionHandler' => __DIR__ . '/../..' . '/modules/ppcp-session/src/class-sessionhandler.php',
        'WooCommerce\\PayPalCommerce\\Session\\SessionModule' => __DIR__ . '/../..' . '/modules/ppcp-session/src/class-sessionmodule.php',
        'WooCommerce\\PayPalCommerce\\StatusReport\\Renderer' => __DIR__ . '/../..' . '/modules/ppcp-status-report/src/class-renderer.php',
        'WooCommerce\\PayPalCommerce\\StatusReport\\StatusReportModule' => __DIR__ . '/../..' . '/modules/ppcp-status-report/src/class-statusreportmodule.php',
        'WooCommerce\\PayPalCommerce\\Subscription\\Helper\\SubscriptionHelper' => __DIR__ . '/../..' . '/modules/ppcp-subscription/src/Helper/class-subscriptionhelper.php',
        'WooCommerce\\PayPalCommerce\\Subscription\\RenewalHandler' => __DIR__ . '/../..' . '/modules/ppcp-subscription/src/class-renewalhandler.php',
        'WooCommerce\\PayPalCommerce\\Subscription\\Repository\\PaymentTokenRepository' => __DIR__ . '/../..' . '/modules/ppcp-subscription/src/Repository/class-paymenttokenrepository.php',
        'WooCommerce\\PayPalCommerce\\Subscription\\SubscriptionModule' => __DIR__ . '/../..' . '/modules/ppcp-subscription/src/class-subscriptionmodule.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Admin\\OrderTablePaymentStatusColumn' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Admin/class-ordertablepaymentstatuscolumn.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Admin\\PaymentStatusOrderDetail' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Admin/class-paymentstatusorderdetail.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Admin\\RenderAuthorizeAction' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Admin/class-renderauthorizeaction.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Assets\\SettingsPageAssets' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Assets/class-settingspageassets.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Checkout\\CheckoutPayPalAddressPreset' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Checkout/class-checkoutpaypaladdresspreset.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Checkout\\DisableGateways' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Checkout/class-disablegateways.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Endpoint\\ReturnUrlEndpoint' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Endpoint/class-returnurlendpoint.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Exception\\NotFoundException' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Exception/class-notfoundexception.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Gateway\\CreditCardGateway' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Gateway/class-creditcardgateway.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Gateway\\PayPalGateway' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Gateway/class-paypalgateway.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Gateway\\ProcessPaymentTrait' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Gateway/class-processpaymenttrait.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Gateway\\TransactionUrlProvider' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Gateway/class-transactionurlprovider.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Notice\\AuthorizeOrderActionNotice' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Notice/class-authorizeorderactionnotice.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Notice\\ConnectAdminNotice' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Notice/class-connectadminnotice.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Processor\\AuthorizedPaymentsProcessor' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Processor/class-authorizedpaymentsprocessor.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Processor\\OrderProcessor' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Processor/class-orderprocessor.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Processor\\RefundProcessor' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Processor/class-refundprocessor.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Settings\\SectionsRenderer' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Settings/class-sectionsrenderer.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Settings\\Settings' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Settings/class-settings.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Settings\\SettingsListener' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Settings/class-settingslistener.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\Settings\\SettingsRenderer' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Settings/class-settingsrenderer.php',
        'WooCommerce\\PayPalCommerce\\WcGateway\\WcGatewayModule' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/class-wcgatewaymodule.php',
        'WooCommerce\\PayPalCommerce\\Webhooks\\Handler\\CheckoutOrderApproved' => __DIR__ . '/../..' . '/modules/ppcp-webhooks/src/Handler/class-checkoutorderapproved.php',
        'WooCommerce\\PayPalCommerce\\Webhooks\\Handler\\CheckoutOrderCompleted' => __DIR__ . '/../..' . '/modules/ppcp-webhooks/src/Handler/class-checkoutordercompleted.php',
        'WooCommerce\\PayPalCommerce\\Webhooks\\Handler\\PaymentCaptureCompleted' => __DIR__ . '/../..' . '/modules/ppcp-webhooks/src/Handler/class-paymentcapturecompleted.php',
        'WooCommerce\\PayPalCommerce\\Webhooks\\Handler\\PaymentCaptureRefunded' => __DIR__ . '/../..' . '/modules/ppcp-webhooks/src/Handler/class-paymentcapturerefunded.php',
        'WooCommerce\\PayPalCommerce\\Webhooks\\Handler\\PaymentCaptureReversed' => __DIR__ . '/../..' . '/modules/ppcp-webhooks/src/Handler/class-paymentcapturereversed.php',
        'WooCommerce\\PayPalCommerce\\Webhooks\\Handler\\PrefixTrait' => __DIR__ . '/../..' . '/modules/ppcp-webhooks/src/Handler/class-prefixtrait.php',
        'WooCommerce\\PayPalCommerce\\Webhooks\\Handler\\RequestHandler' => __DIR__ . '/../..' . '/modules/ppcp-webhooks/src/Handler/class-requesthandler.php',
        'WooCommerce\\PayPalCommerce\\Webhooks\\IncomingWebhookEndpoint' => __DIR__ . '/../..' . '/modules/ppcp-webhooks/src/class-incomingwebhookendpoint.php',
        'WooCommerce\\PayPalCommerce\\Webhooks\\WebhookModule' => __DIR__ . '/../..' . '/modules/ppcp-webhooks/src/class-webhookmodule.php',
        'WooCommerce\\PayPalCommerce\\Webhooks\\WebhookRegistrar' => __DIR__ . '/../..' . '/modules/ppcp-webhooks/src/class-webhookregistrar.php',
        'WooCommerce\\WooCommerce\\Logging\\Logger\\NullLogger' => __DIR__ . '/../..' . '/modules/woocommerce-logging/src/Logger/class-nulllogger.php',
        'WooCommerce\\WooCommerce\\Logging\\Logger\\WooCommerceLogger' => __DIR__ . '/../..' . '/modules/woocommerce-logging/src/Logger/class-woocommercelogger.php',
        'WooCommerce\\WooCommerce\\Logging\\WooCommerceLoggingModule' => __DIR__ . '/../..' . '/modules/woocommerce-logging/src/class-woocommerceloggingmodule.php',
        'Woocommerce\\PayPalCommerce\\ApiClient\\Entity\\Capture' => __DIR__ . '/../..' . '/modules/ppcp-api-client/src/Entity/class-capture.php',
        'Woocommerce\\PayPalCommerce\\WcGateway\\Helper\\DccProductStatus' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Helper/class-dccproductstatus.php',
        'Woocommerce\\PayPalCommerce\\WcGateway\\Helper\\SettingsStatus' => __DIR__ . '/../..' . '/modules/ppcp-wc-gateway/src/Helper/class-settingsstatus.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd327382102db5a22440815e53142caa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd327382102db5a22440815e53142caa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd327382102db5a22440815e53142caa::$classMap;

        }, null, ClassLoader::class);
    }
}
