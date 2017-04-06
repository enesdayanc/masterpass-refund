<?php

namespace Enesdayanc\MasterpassRefund;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'TransactionRefund' => '\\Enesdayanc\\MasterpassRefund\\StructType\\TransactionRefund',
            'TransactionRefundResponse' => '\\Enesdayanc\\MasterpassRefund\\StructType\\TransactionRefundResponse',
            'TransactionRefundRequest' => '\\Enesdayanc\\MasterpassRefund\\StructType\\TransactionRefundRequest',
            'TransactionRefundRequestBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\TransactionRefundRequestBody',
            'TransactionRefundResult' => '\\Enesdayanc\\MasterpassRefund\\StructType\\TransactionRefundResult',
            'TransactionRefundResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\TransactionRefundResponseBody',
            'CustomTransactionRefundResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\CustomTransactionRefundResponseBody',
            'RequestHeader' => '\\Enesdayanc\\MasterpassRefund\\StructType\\RequestHeader',
            'AdditionalFields' => '\\Enesdayanc\\MasterpassRefund\\StructType\\AdditionalFields',
            'CustomField' => '\\Enesdayanc\\MasterpassRefund\\StructType\\CustomField',
            'ResponseHeader' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ResponseHeader',
            'ResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ResponseBody',
            'SmsNotification' => '\\Enesdayanc\\MasterpassRefund\\StructType\\SmsNotification',
            'ConsumerRewardResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ConsumerRewardResponseBody',
            'ArrayOfRewardList' => '\\Enesdayanc\\MasterpassRefund\\ArrayType\\ArrayOfRewardList',
            'RewardList' => '\\Enesdayanc\\MasterpassRefund\\StructType\\RewardList',
            'ArrayOfChequeList' => '\\Enesdayanc\\MasterpassRefund\\ArrayType\\ArrayOfChequeList',
            'ChequeList' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ChequeList',
            'ConsumerFinancialResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ConsumerFinancialResponseBody',
            'MoneySendResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\MoneySendResponseBody',
            'MerchantFinancialResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\MerchantFinancialResponseBody',
            'ArrayOfListItem' => '\\Enesdayanc\\MasterpassRefund\\ArrayType\\ArrayOfListItem',
            'ListItem' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ListItem',
            'MasterPassResponseCustomField' => '\\Enesdayanc\\MasterpassRefund\\StructType\\MasterPassResponseCustomField',
            'RewardResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\RewardResponseBody',
            'CustomRewardResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\CustomRewardResponseBody',
            'CommitPurchaseResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\CommitPurchaseResponseBody',
            'CustomCommitPurchaseResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\CustomCommitPurchaseResponseBody',
            'DirectPurchaseResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\DirectPurchaseResponseBody',
            'CustomRemotePurchaseResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\CustomRemotePurchaseResponseBody',
            'OtherMerchantResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\OtherMerchantResponseBody',
            'PurchaseAndRegisterResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\PurchaseAndRegisterResponseBody',
            'ProcessPaymentResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ProcessPaymentResponseBody',
            'ReversePurchaseResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ReversePurchaseResponseBody',
            'CommitRecurringPaymentResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\CommitRecurringPaymentResponseBody',
            'CustomCommitRecurringPaymentResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\CustomCommitRecurringPaymentResponseBody',
            'ManageRecurringPaymentResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ManageRecurringPaymentResponseBody',
            'DirectPurchaseResponseBody3DAuth' => '\\Enesdayanc\\MasterpassRefund\\StructType\\DirectPurchaseResponseBody3DAuth',
            'GetCardResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\GetCardResponseBody',
            'MasterpassPostbackResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\MasterpassPostbackResponseBody',
            'VerifyUserResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\VerifyUserResponseBody',
            'CheckMasterPassEndUserResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\CheckMasterPassEndUserResponseBody',
            'DefineAuthTokenResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\DefineAuthTokenResponseBody',
            'UnBlockMPinResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\UnBlockMPinResponseBody',
            'GenerateOTPResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\GenerateOTPResponseBody',
            'ValidateTransactionResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ValidateTransactionResponseBody',
            'LoginResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\LoginResponseBody',
            'VerifyMpinResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\VerifyMpinResponseBody',
            'ForgotPasswordResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ForgotPasswordResponseBody',
            'ResendOTPResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ResendOTPResponseBody',
            'UpdateUserResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\UpdateUserResponseBody',
            'ChangeAuthTokenResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ChangeAuthTokenResponseBody',
            'VerifyResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\VerifyResponseBody',
            'AuthenticateResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\AuthenticateResponseBody',
            'SetDefaultAccountResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\SetDefaultAccountResponseBody',
            'ArrayOfString' => '\\Enesdayanc\\MasterpassRefund\\ArrayType\\ArrayOfString',
            'SetDefaultAddressResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\SetDefaultAddressResponseBody',
            'ArrayOfString1' => '\\Enesdayanc\\MasterpassRefund\\ArrayType\\ArrayOfString1',
            'ReinitializeDukptResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ReinitializeDukptResponseBody',
            'RedownloadListResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\RedownloadListResponseBody',
            'ResetMPinResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ResetMPinResponseBody',
            'CompleteRegistrationResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\CompleteRegistrationResponseBody',
            'MPGAccountResponse' => '\\Enesdayanc\\MasterpassRefund\\StructType\\MPGAccountResponse',
            'MPGAccountCustomField' => '\\Enesdayanc\\MasterpassRefund\\StructType\\MPGAccountCustomField',
            'ExternalAccountResponse' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ExternalAccountResponse',
            'ExternalAccountCustomField' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ExternalAccountCustomField',
            'AddCardToMasterPassResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\AddCardToMasterPassResponseBody',
            'ConsumerRegistrationResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ConsumerRegistrationResponseBody',
            'ConsumerAccountSearchResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ConsumerAccountSearchResponseBody',
            'ConsumerAccount' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ConsumerAccount',
            'LinkAccountToClientResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\LinkAccountToClientResponseBody',
            'ConsumerRegistrationResponseBodyForPurchase' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ConsumerRegistrationResponseBodyForPurchase',
            'UpdateCardLockResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\UpdateCardLockResponseBody',
            'MaintainListResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\MaintainListResponseBody',
            'ViewListResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ViewListResponseBody',
            'MerchantRegistrationResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\MerchantRegistrationResponseBody',
            'CustomFields' => '\\Enesdayanc\\MasterpassRefund\\StructType\\CustomFields',
            'TransactionVoidResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\TransactionVoidResponseBody',
            'CustomTransactionVoidResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\CustomTransactionVoidResponseBody',
            'ViewAddressListResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ViewAddressListResponseBody',
            'ArrayOfAddressListItem' => '\\Enesdayanc\\MasterpassRefund\\ArrayType\\ArrayOfAddressListItem',
            'AddressListItem' => '\\Enesdayanc\\MasterpassRefund\\StructType\\AddressListItem',
            'AddAddressResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\AddAddressResponseBody',
            'MaintainAddressListResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\MaintainAddressListResponseBody',
            'TransactionQueryResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\TransactionQueryResponseBody',
            'ArrayOfOrderItem' => '\\Enesdayanc\\MasterpassRefund\\ArrayType\\ArrayOfOrderItem',
            'OrderItem' => '\\Enesdayanc\\MasterpassRefund\\StructType\\OrderItem',
            'CustomTransactionQueryResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\CustomTransactionQueryResponseBody',
            'IssuerCardRegistrationResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\IssuerCardRegistrationResponseBody',
            'GenerateKeyResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\GenerateKeyResponseBody',
            'ViewMPListResponseBody' => '\\Enesdayanc\\MasterpassRefund\\StructType\\ViewMPListResponseBody',
            'ArrayOfMPListItem' => '\\Enesdayanc\\MasterpassRefund\\ArrayType\\ArrayOfMPListItem',
            'MPListItem' => '\\Enesdayanc\\MasterpassRefund\\StructType\\MPListItem',
            'Card' => '\\Enesdayanc\\MasterpassRefund\\StructType\\Card',
            'Contact' => '\\Enesdayanc\\MasterpassRefund\\StructType\\Contact',
        );
    }
}
