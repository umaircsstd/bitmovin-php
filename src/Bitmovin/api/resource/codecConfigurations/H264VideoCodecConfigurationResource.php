<?php

namespace Bitmovin\api\resource\codecConfigurations;

use Bitmovin\api\model\codecConfigurations\H264VideoCodecConfiguration;

class H264VideoCodecConfigurationResource extends CodecConfigurationResource
{


    /**
     * @param H264VideoCodecConfiguration $codecConfiguration
     *
     * @return H264VideoCodecConfiguration
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function create(H264VideoCodecConfiguration $codecConfiguration)
    {
        return parent::createCodecConfiguration($codecConfiguration);
    }

    /**
     * @param H264VideoCodecConfiguration $codecConfiguration
     *
     * @return H264VideoCodecConfiguration
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function delete(H264VideoCodecConfiguration $codecConfiguration)
    {
        return parent::deleteCodecConfiguration($codecConfiguration);
    }

    /**
     * @param H264VideoCodecConfiguration $codecConfiguration
     *
     * @return H264VideoCodecConfiguration
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function get(H264VideoCodecConfiguration $codecConfiguration)
    {
        return parent::getCodecConfiguration($codecConfiguration);
    }

    /**
     * @return H264VideoCodecConfiguration[]
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function listAll()
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return parent::listAllCodecConfigurations();
    }

    /**
     * @param $codecConfigurationId
     *
     * @return H264VideoCodecConfiguration
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function getById($codecConfigurationId)
    {
        return parent::getCodecConfigurationById($codecConfigurationId);
    }

    /**
     * @param $codecConfigurationId
     *
     * @return H264VideoCodecConfiguration
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function deleteById($codecConfigurationId)
    {
        return parent::deleteCodecConfigurationById($codecConfigurationId);
    }
}