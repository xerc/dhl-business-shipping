<?php

namespace ChristophSchaeffer\Dhl\BusinessShipping;

use ChristophSchaeffer\Dhl\BusinessShipping\Credentials\ShippingClientCredentials;
use ChristophSchaeffer\Dhl\BusinessShipping\Protocol\Soap;

/**
 * Class Client
 * @deprecated
 * @package ChristophSchaeffer\Dhl\BusinessShipping
 *
 * This class has been deprecated and will be removed soon. Please use either the MultiClient or ShippingClient please.
 */
class Client {

    /** @deprecated */
    const LANGUAGE_LOCALE_GERMAN_DE  = 'de_DE';
    /** @deprecated */
    const LANGUAGE_LOCALE_ENGLISH_GB = 'en_GB';
    /** @deprecated */
    const MAJOR_RELEASE = 3;
    /** @deprecated */
    const MINOR_RELEASE = 1;

    /**
     * @var Soap
     * @deprecated
     */
    public $soap;

    private $shippingClient;

    /**
     * @deprecated
     *
     * This class has been deprecated and will be removed soon. Please use either the MultiClient or ShippingClient please.
     *
     * @param string      $appID
     * @param string      $apiToken
     * @param string      $login
     * @param string      $password
     * @param bool        $isSandbox
     * @param string      $languageLocale
     * @param \SoapClient $soap
     *
     * @throws \SoapFault
     *
     * Client constructor.
     */
    public function __construct($appID, $apiToken, $login = '', $password = '', $isSandbox = FALSE,
                                $languageLocale = self::LANGUAGE_LOCALE_GERMAN_DE, $soap = NULL) {

        $credentials = new ShippingClientCredentials($appID, $apiToken, $login, $password);
        $this->shippingClient = new ShippingClient($credentials, $isSandbox, $languageLocale, $soap);
    }

    /**
     * @deprecated
     *
     * This class has been deprecated and will be removed soon. Please use either the MultiClient or ShippingClient please.
     *
     *
     * @param Request\createShipmentOrder $request
     *
     * @return Response\createShipmentOrder
     *
     * With this operation creates shipments for DHL Paket including the relevant shipping documents.
     */
    public function createShipmentOrder(Request\createShipmentOrder $request) {
        $this->shippingClient->createShipmentOrder($request);
    }

    /**
     * @deprecated
     *
     * This class has been deprecated and will be removed soon. Please use either the MultiClient or ShippingClient please.
     *
     *
     * @param Request\deleteShipmentOrder $request
     *
     * @return Response\deleteShipmentOrder
     *
     * This operation cancels earlier created shipments. However, this will only work for shipments for that you
     * haven't called the doManifest function. Also keep in mind that if not set otherwise in the
     * "Geschäftskundenportal" there will be an automatic doManifest call on all open shipments at 6 pm every day.
     */
    public function deleteShipmentOrder(Request\deleteShipmentOrder $request) {
        $this->shippingClient->deleteShipmentOrder($request);
    }

    /**
     * @deprecated
     *
     * This class has been deprecated and will be removed soon. Please use either the MultiClient or ShippingClient please.
     *
     *
     * @param Request\doManifest $request
     *
     * @return Response\doManifest
     *
     * With this operation a end-of-day closing for up to 30 previously created shipments can be carried out. Please
     * keep in mind, that once you have called this function for a shipment order it can't be canceled anymore.
     */
    public function doManifest(Request\doManifest $request) {
        $this->shippingClient->doManifest($request);
    }

    /**
     * @deprecated
     *
     * This class has been deprecated and will be removed soon. Please use either the MultiClient or ShippingClient please.
     *
     *
     * @param Request\getExportDoc $request
     *
     * @return Response\getExportDoc
     *
     * This operation hands back export documents for previously created shipments.
     */
    public function getExportDoc(Request\getExportDoc $request) {
        $this->shippingClient->getExportDoc($request);
    }

    /**
     * @deprecated
     *
     * This class has been deprecated and will be removed soon. Please use either the MultiClient or ShippingClient please.
     *
     *
     * @param Request\getLabel $request
     *
     * @return Response\getLabel
     *
     * This operation hands back the shipping label for previously created shipments.
     */
    public function getLabel(Request\getLabel $request) {
        $this->shippingClient->getLabel($request);
    }

    /**
     * @deprecated
     *
     * This class has been deprecated and will be removed soon. Please use either the MultiClient or ShippingClient please.
     *
     *
     * @param Request\getManifest $request
     *
     * @return Response\getManifest
     *
     * With this operation end-of-day reports are available for a specific day or period.
     */
    public function getManifest(Request\getManifest $request) {
        $this->shippingClient->getManifest($request);
    }

    /**
     * @deprecated
     *
     * This class has been deprecated and will be removed soon. Please use either the MultiClient or ShippingClient please.
     *
     *
     * @param Request\getVersion $request
     *
     * @return Response\getVersion
     *
     * With this operation the latest version available on the web can be queried.
     */
    public function getVersion(Request\getVersion $request) {
        $this->shippingClient->getVersion($request);
    }

    /**
     * @deprecated
     *
     * This class has been deprecated and will be removed soon. Please use either the MultiClient or ShippingClient please.
     *
     *
     * @param Request\updateShipmentOrder $request
     *
     * @return Response\updateShipmentOrder
     *
     * With this operation shipping documents are updated for previously created shipments. The update automatically
     * performs a cancellation and creating of a shipment. However, this will only work for shipments for that you
     * haven't called the doManifest function. Also keep in mind that if not set otherwise in the
     * "Geschäftskundenportal" there will be an automatic doManifest call on all open shipments at 6 pm every day.
     */
    public function updateShipmentOrder(Request\updateShipmentOrder $request) {
        $this->shippingClient->updateShipmentOrder($request);
    }

    /**
     * @deprecated
     *
     * This class has been deprecated and will be removed soon. Please use either the MultiClient or ShippingClient please.
     *
     *
     * @param Request\validateShipment $request
     *
     * @return Response\validateShipment
     *
     * With this operation the data for a shipment can be validated before a shipment label and tracking number will be
     * created.
     */
    public function validateShipment(Request\validateShipment $request) {
        $this->shippingClient->validateShipment($request);
    }

}
