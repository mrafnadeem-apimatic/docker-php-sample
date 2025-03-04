<?php

declare(strict_types=1);

/*
 * APIMATICCalculatorByClientLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace APIMATICCalculatorByClientLib\Controllers;

use APIMATICCalculatorByClientLib\Http\ApiResponse;
use Core\Request\Parameters\QueryParam;
use CoreInterfaces\Core\Request\RequestMethod;

class SimpleCalculatorController extends BaseController
{
    /**
     * Calculates the expression using the specified operation in client.
     *
     * @param array $options Array with all options for search
     *
     * @return ApiResponse Response from the API call
     */
    public function getCalculateByClient(array $options): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/')
            ->auth('httpHeader')
            ->parameters(
                QueryParam::init('x', $options)->extract('x'),
                QueryParam::init('y', $options)->extract('y')
            );

        $_resHandler = $this->responseHandler()->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
