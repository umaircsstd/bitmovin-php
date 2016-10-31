<?php

namespace Bitmovin\api\resource\outputs;

use Bitmovin\api\model\outputs\GcsOutput;

class GcsOutputResource extends OutputResource
{

    /**
     * @param GcsOutput $output
     *
     * @return GcsOutput
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function create(GcsOutput $output)
    {
        return parent::createOutput($output);
    }

    /**
     * @param GcsOutput $output
     *
     * @return GcsOutput
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function delete(GcsOutput $output)
    {
        return parent::deleteOutput($output);
    }

    /**
     * @param GcsOutput $output
     *
     * @return GcsOutput
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function get(GcsOutput $output)
    {
        return parent::getOutput($output);
    }

    /**
     * @return GcsOutput[]
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function listAll()
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return parent::listAllOutputs();
    }

    /**
     * @param $outputId
     *
     * @return GcsOutput
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function getById($outputId)
    {
        return parent::getOutputById($outputId);
    }

    /**
     * @param $outputId
     *
     * @return GcsOutput
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function deleteById($outputId)
    {
        return parent::deleteOutputById($outputId);
    }
}