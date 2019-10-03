<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/translation.proto

namespace Google\Cloud\AutoML\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Annotation details specific to translation.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.TranslationAnnotation</code>
 */
class TranslationAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only . The translated content.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.TextSnippet translated_content = 1;</code>
     */
    private $translated_content = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AutoML\V1\TextSnippet $translated_content
     *           Output only . The translated content.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\Translation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only . The translated content.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.TextSnippet translated_content = 1;</code>
     * @return \Google\Cloud\AutoML\V1\TextSnippet
     */
    public function getTranslatedContent()
    {
        return $this->translated_content;
    }

    /**
     * Output only . The translated content.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.TextSnippet translated_content = 1;</code>
     * @param \Google\Cloud\AutoML\V1\TextSnippet $var
     * @return $this
     */
    public function setTranslatedContent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoML\V1\TextSnippet::class);
        $this->translated_content = $var;

        return $this;
    }

}

