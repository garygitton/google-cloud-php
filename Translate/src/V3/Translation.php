<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/translation_service.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single translation response.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.Translation</code>
 */
class Translation extends \Google\Protobuf\Internal\Message
{
    /**
     * Text translated into the target language.
     * If an error occurs during translation, this field might be excluded from
     * the response.
     *
     * Generated from protobuf field <code>string translated_text = 1;</code>
     */
    private $translated_text = '';
    /**
     * Only present when `model` is present in the request.
     * `model` here is normalized to have project number.
     * For example:
     * If the `model` requested in TranslationTextRequest is
     * `projects/{project-id}/locations/{location-id}/models/general/nmt` then
     * `model` here would be normalized to
     * `projects/{project-number}/locations/{location-id}/models/general/nmt`.
     *
     * Generated from protobuf field <code>string model = 2;</code>
     */
    private $model = '';
    /**
     * The BCP-47 language code of source text in the initial request, detected
     * automatically, if no source language was passed within the initial
     * request. If the source language was passed, auto-detection of the language
     * does not occur and this field is empty.
     *
     * Generated from protobuf field <code>string detected_language_code = 4;</code>
     */
    private $detected_language_code = '';
    /**
     * The `glossary_config` used for this translation.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.TranslateTextGlossaryConfig glossary_config = 3;</code>
     */
    private $glossary_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $translated_text
     *           Text translated into the target language.
     *           If an error occurs during translation, this field might be excluded from
     *           the response.
     *     @type string $model
     *           Only present when `model` is present in the request.
     *           `model` here is normalized to have project number.
     *           For example:
     *           If the `model` requested in TranslationTextRequest is
     *           `projects/{project-id}/locations/{location-id}/models/general/nmt` then
     *           `model` here would be normalized to
     *           `projects/{project-number}/locations/{location-id}/models/general/nmt`.
     *     @type string $detected_language_code
     *           The BCP-47 language code of source text in the initial request, detected
     *           automatically, if no source language was passed within the initial
     *           request. If the source language was passed, auto-detection of the language
     *           does not occur and this field is empty.
     *     @type \Google\Cloud\Translate\V3\TranslateTextGlossaryConfig $glossary_config
     *           The `glossary_config` used for this translation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\TranslationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Text translated into the target language.
     * If an error occurs during translation, this field might be excluded from
     * the response.
     *
     * Generated from protobuf field <code>string translated_text = 1;</code>
     * @return string
     */
    public function getTranslatedText()
    {
        return $this->translated_text;
    }

    /**
     * Text translated into the target language.
     * If an error occurs during translation, this field might be excluded from
     * the response.
     *
     * Generated from protobuf field <code>string translated_text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTranslatedText($var)
    {
        GPBUtil::checkString($var, True);
        $this->translated_text = $var;

        return $this;
    }

    /**
     * Only present when `model` is present in the request.
     * `model` here is normalized to have project number.
     * For example:
     * If the `model` requested in TranslationTextRequest is
     * `projects/{project-id}/locations/{location-id}/models/general/nmt` then
     * `model` here would be normalized to
     * `projects/{project-number}/locations/{location-id}/models/general/nmt`.
     *
     * Generated from protobuf field <code>string model = 2;</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Only present when `model` is present in the request.
     * `model` here is normalized to have project number.
     * For example:
     * If the `model` requested in TranslationTextRequest is
     * `projects/{project-id}/locations/{location-id}/models/general/nmt` then
     * `model` here would be normalized to
     * `projects/{project-number}/locations/{location-id}/models/general/nmt`.
     *
     * Generated from protobuf field <code>string model = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

    /**
     * The BCP-47 language code of source text in the initial request, detected
     * automatically, if no source language was passed within the initial
     * request. If the source language was passed, auto-detection of the language
     * does not occur and this field is empty.
     *
     * Generated from protobuf field <code>string detected_language_code = 4;</code>
     * @return string
     */
    public function getDetectedLanguageCode()
    {
        return $this->detected_language_code;
    }

    /**
     * The BCP-47 language code of source text in the initial request, detected
     * automatically, if no source language was passed within the initial
     * request. If the source language was passed, auto-detection of the language
     * does not occur and this field is empty.
     *
     * Generated from protobuf field <code>string detected_language_code = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDetectedLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->detected_language_code = $var;

        return $this;
    }

    /**
     * The `glossary_config` used for this translation.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.TranslateTextGlossaryConfig glossary_config = 3;</code>
     * @return \Google\Cloud\Translate\V3\TranslateTextGlossaryConfig|null
     */
    public function getGlossaryConfig()
    {
        return isset($this->glossary_config) ? $this->glossary_config : null;
    }

    public function hasGlossaryConfig()
    {
        return isset($this->glossary_config);
    }

    public function clearGlossaryConfig()
    {
        unset($this->glossary_config);
    }

    /**
     * The `glossary_config` used for this translation.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.TranslateTextGlossaryConfig glossary_config = 3;</code>
     * @param \Google\Cloud\Translate\V3\TranslateTextGlossaryConfig $var
     * @return $this
     */
    public function setGlossaryConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Translate\V3\TranslateTextGlossaryConfig::class);
        $this->glossary_config = $var;

        return $this;
    }

}

