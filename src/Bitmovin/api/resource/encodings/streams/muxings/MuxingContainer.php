<?php

namespace Bitmovin\api\resource\encodings\streams\muxings;

use Bitmovin\api\model\encodings\Encoding;
use Bitmovin\api\model\encodings\muxing\FMP4Muxing;
use Bitmovin\api\model\encodings\muxing\MP4Muxing;
use Bitmovin\api\model\encodings\muxing\TSMuxing;
use Bitmovin\api\model\encodings\muxing\ProgressiveTSMuxing;
use Bitmovin\api\model\encodings\muxing\WebmMuxing;
use Bitmovin\api\util\ApiUrls;
use Bitmovin\api\util\RouteHelper;

class MuxingContainer
{
    /** @var Mp4MuxingResource */
    private $mp4Muxing;
    /** @var Fmp4MuxingResource */
    private $fmp4Muxing;
    /** @var  TsMuxingResource */
    private $tsMuxing;
    /** @var  ProgressiveTsMuxingResource */
    private $progressiveTsMuxing;
    /** @var  WebmMuxingResource */
    private $webmMuxing;

    /**
     * MuxingContainer constructor.
     *
     * @param Encoding $encoding
     * @param          $apiKey
     */
    public function __construct(Encoding $encoding, $apiKey)
    {
        $routeReplacementMap = array(
            ApiUrls::PH_ENCODING_ID => $encoding->getId()
        );
        $baseUriMp4 = RouteHelper::buildURI(ApiUrls::ENCODING_MUXINGS_MP4, $routeReplacementMap);
        $baseUriFmp4 = RouteHelper::buildURI(ApiUrls::ENCODING_MUXINGS_FMP4, $routeReplacementMap);
        $baseUriTs = RouteHelper::buildURI(ApiUrls::ENCODING_MUXINGS_TS, $routeReplacementMap);
        $baseUriProgressiveTs = RouteHelper::buildURI(ApiUrls::ENCODING_MUXINGS_PROGRESSIVE_TS, $routeReplacementMap);
        $baseUriWebm = RouteHelper::buildURI(ApiUrls::ENCODING_MUXINGS_WEBM, $routeReplacementMap);

        $this->mp4Muxing = new Mp4MuxingResource($encoding, $baseUriMp4, MP4Muxing::class, $apiKey);
        $this->fmp4Muxing = new Fmp4MuxingResource($encoding, $baseUriFmp4, FMP4Muxing::class, $apiKey);
        $this->tsMuxing = new TsMuxingResource($encoding, $baseUriTs, TSMuxing::class, $apiKey);
        $this->progressiveTsMuxing = new ProgressiveTsMuxingResource($encoding, $baseUriProgressiveTs, ProgressiveTSMuxing::class, $apiKey);
        $this->webmMuxing = new WebmMuxingResource($encoding, $baseUriWebm, WebmMuxing::class, $apiKey);
    }

    /**
     * @return Mp4MuxingResource
     */
    public function mp4Muxing()
    {
        return $this->mp4Muxing;
    }

    /**
     * @return Fmp4MuxingResource
     */
    public function fmp4Muxing()
    {
        return $this->fmp4Muxing;
    }

    /**
     * @return TsMuxingResource
     */
    public function tsMuxing()
    {
        return $this->tsMuxing;
    }

    /**
     * @return ProgressiveTsMuxingResource
     */
    public function progressiveTsMuxing()
    {
        return $this->progressiveTsMuxing;
    }

    /**
     * @return WebmMuxingResource
     */
    public function webmMuxing()
    {
        return $this->webmMuxing;
    }
}