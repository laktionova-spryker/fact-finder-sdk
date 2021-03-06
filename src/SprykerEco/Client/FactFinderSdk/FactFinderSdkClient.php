<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Client\FactFinderSdk;

use Generated\Shared\Transfer\FactFinderSdkRecommendationRequestTransfer;
use Generated\Shared\Transfer\FactFinderSdkSearchRequestTransfer;
use Generated\Shared\Transfer\FactFinderSdkSuggestRequestTransfer;
use Generated\Shared\Transfer\FactFinderSdkTrackingRequestTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \SprykerEco\Client\FactFinderSdk\FactFinderSdkFactory getFactory()
 */
class FactFinderSdkClient extends AbstractClient implements FactFinderSdkClientInterface
{

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FactFinderSdkSearchRequestTransfer $factFinderSearchRequestTransfer
     *
     * @return \Generated\Shared\Transfer\FactFinderSdkSearchResponseTransfer
     */
    public function search(FactFinderSdkSearchRequestTransfer $factFinderSearchRequestTransfer)
    {
        $factFinderSearchResponseTransfer = $this
            ->getFactory()
            ->createSearchRequest()
            ->request($factFinderSearchRequestTransfer);

        return $factFinderSearchResponseTransfer;
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FactFinderSdkTrackingRequestTransfer $factFinderTrackingRequestTransfer
     *
     * @return \Generated\Shared\Transfer\FactFinderSdkTrackingResponseTransfer
     */
    public function track(FactFinderSdkTrackingRequestTransfer $factFinderTrackingRequestTransfer)
    {
        $factFinderTrackingResponseTransfer = $this->getFactory()
            ->createTrackingRequest()
            ->request($factFinderTrackingRequestTransfer);

        return $factFinderTrackingResponseTransfer;
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FactFinderSdkSuggestRequestTransfer $factFinderSuggestRequestTransfer
     *
     * @return \Generated\Shared\Transfer\FactFinderSdkSuggestResponseTransfer
     */
    public function getSuggestions(FactFinderSdkSuggestRequestTransfer $factFinderSuggestRequestTransfer)
    {
        $factFinderSuggestResponseTransfer = $this
            ->getFactory()
            ->createSuggestRequest()
            ->request($factFinderSuggestRequestTransfer);

        return $factFinderSuggestResponseTransfer;
    }

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\FactFinderSdkRecommendationRequestTransfer $factFinderRecommendationRequestTransfer
     *
     * @return \Generated\Shared\Transfer\FactFinderSdkRecommendationResponseTransfer
     */
    public function getRecommendations(FactFinderSdkRecommendationRequestTransfer $factFinderRecommendationRequestTransfer)
    {
        $factFinderRecommendationResponseTransfer = $this
            ->getFactory()
            ->createRecommendationsRequest()
            ->request($factFinderRecommendationRequestTransfer);

        return $factFinderRecommendationResponseTransfer;
    }

    /**
     * @api
     *
     * @return \Spryker\Client\Session\SessionClientInterface
     */
    public function getSession()
    {
        return $this->getFactory()
            ->getSession();
    }

}
