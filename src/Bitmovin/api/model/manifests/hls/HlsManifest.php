<?php

namespace Bitmovin\api\model\manifests\hls;

use Bitmovin\api\model\AbstractModel;
use Bitmovin\api\model\encodings\helper\EncodingOutput;
use JMS\Serializer\Annotation as JMS;

class HlsManifest extends AbstractModel
{

    /**
     * @JMS\Type("string")
     * @var  string
     */
    private $name;

    /**
     * @JMS\Type("array<Bitmovin\api\model\encodings\helper\EncodingOutput>")
     * @var  EncodingOutput[]
     */
    private $outputs;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return \Bitmovin\api\model\encodings\helper\EncodingOutput[]
     */
    public function getOutputs()
    {
        return $this->outputs;
    }

    /**
     * @param \Bitmovin\api\model\encodings\helper\EncodingOutput[] $outputs
     */
    public function setOutputs($outputs)
    {
        $this->outputs = $outputs;
    }

}