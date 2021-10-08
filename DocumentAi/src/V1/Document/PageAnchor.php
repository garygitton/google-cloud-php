<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Referencing the visual context of the entity in the [Document.pages][google.cloud.documentai.v1.Document.pages].
 * Page anchors can be cross-page, consist of multiple bounding polygons and
 * optionally reference specific layout element types.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.PageAnchor</code>
 */
class PageAnchor extends \Google\Protobuf\Internal\Message
{
    /**
     * One or more references to visual page elements
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.PageAnchor.PageRef page_refs = 1;</code>
     */
    private $page_refs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1\Document\PageAnchor\PageRef[]|\Google\Protobuf\Internal\RepeatedField $page_refs
     *           One or more references to visual page elements
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * One or more references to visual page elements
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.PageAnchor.PageRef page_refs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPageRefs()
    {
        return $this->page_refs;
    }

    /**
     * One or more references to visual page elements
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.PageAnchor.PageRef page_refs = 1;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\PageAnchor\PageRef[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPageRefs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\PageAnchor\PageRef::class);
        $this->page_refs = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PageAnchor::class, \Google\Cloud\DocumentAI\V1\Document_PageAnchor::class);

