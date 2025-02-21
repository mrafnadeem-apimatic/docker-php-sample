<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Controllers;

use Core\Request\Parameters\AdditionalFormParams;
use Core\Request\Parameters\FormParam;
use Core\Request\Parameters\HeaderParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use PaypalRestApisLib\Exceptions\OAuthProviderException;
use PaypalRestApisLib\Http\ApiResponse;
use PaypalRestApisLib\Models\OAuthToken;

class OAuthAuthorizationController extends BaseController
{
    /**
     * Create a new OAuth 2 token.
     *
     * @param array $options Array with all options for search
     * @param array|null $fieldParameters Additional optional form parameters are supported by this
     *        endpoint
     *
     * @return ApiResponse Response from the API call
     */
    public function requestToken(array $options, ?array $fieldParameters = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/oauth2/token')
            ->parameters(
                FormParam::init('grant_type', 'client_credentials'),
                HeaderParam::init('Authorization', $options)->extract('authorization'),
                FormParam::init('scope', $options)->extract('scope'),
                AdditionalFormParams::init($fieldParameters)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init('OAuth 2 provider returned an error.', OAuthProviderException::class)
            )
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    'OAuth 2 provider says client authentication failed.',
                    OAuthProviderException::class
                )
            )
            ->type(OAuthToken::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
