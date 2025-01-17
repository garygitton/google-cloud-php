<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/discovery.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Provides information about the analysis status of a discovered resource.
 *
 * Generated from protobuf message <code>grafeas.v1.DiscoveryOccurrence</code>
 */
class DiscoveryOccurrence extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether the resource is continuously analyzed.
     *
     * Generated from protobuf field <code>.grafeas.v1.DiscoveryOccurrence.ContinuousAnalysis continuous_analysis = 1;</code>
     */
    private $continuous_analysis = 0;
    /**
     * The status of discovery for the resource.
     *
     * Generated from protobuf field <code>.grafeas.v1.DiscoveryOccurrence.AnalysisStatus analysis_status = 2;</code>
     */
    private $analysis_status = 0;
    /**
     * When an error is encountered this will contain a LocalizedMessage under
     * details to show to the user. The LocalizedMessage is output only and
     * populated by the API.
     *
     * Generated from protobuf field <code>.google.rpc.Status analysis_status_error = 3;</code>
     */
    private $analysis_status_error = null;
    /**
     * The CPE of the resource being scanned.
     *
     * Generated from protobuf field <code>string cpe = 4;</code>
     */
    private $cpe = '';
    /**
     * The last time this resource was scanned.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_scan_time = 5;</code>
     */
    private $last_scan_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $continuous_analysis
     *           Whether the resource is continuously analyzed.
     *     @type int $analysis_status
     *           The status of discovery for the resource.
     *     @type \Google\Rpc\Status $analysis_status_error
     *           When an error is encountered this will contain a LocalizedMessage under
     *           details to show to the user. The LocalizedMessage is output only and
     *           populated by the API.
     *     @type string $cpe
     *           The CPE of the resource being scanned.
     *     @type \Google\Protobuf\Timestamp $last_scan_time
     *           The last time this resource was scanned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Discovery::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether the resource is continuously analyzed.
     *
     * Generated from protobuf field <code>.grafeas.v1.DiscoveryOccurrence.ContinuousAnalysis continuous_analysis = 1;</code>
     * @return int
     */
    public function getContinuousAnalysis()
    {
        return $this->continuous_analysis;
    }

    /**
     * Whether the resource is continuously analyzed.
     *
     * Generated from protobuf field <code>.grafeas.v1.DiscoveryOccurrence.ContinuousAnalysis continuous_analysis = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setContinuousAnalysis($var)
    {
        GPBUtil::checkEnum($var, \Grafeas\V1\DiscoveryOccurrence\ContinuousAnalysis::class);
        $this->continuous_analysis = $var;

        return $this;
    }

    /**
     * The status of discovery for the resource.
     *
     * Generated from protobuf field <code>.grafeas.v1.DiscoveryOccurrence.AnalysisStatus analysis_status = 2;</code>
     * @return int
     */
    public function getAnalysisStatus()
    {
        return $this->analysis_status;
    }

    /**
     * The status of discovery for the resource.
     *
     * Generated from protobuf field <code>.grafeas.v1.DiscoveryOccurrence.AnalysisStatus analysis_status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAnalysisStatus($var)
    {
        GPBUtil::checkEnum($var, \Grafeas\V1\DiscoveryOccurrence\AnalysisStatus::class);
        $this->analysis_status = $var;

        return $this;
    }

    /**
     * When an error is encountered this will contain a LocalizedMessage under
     * details to show to the user. The LocalizedMessage is output only and
     * populated by the API.
     *
     * Generated from protobuf field <code>.google.rpc.Status analysis_status_error = 3;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getAnalysisStatusError()
    {
        return $this->analysis_status_error;
    }

    public function hasAnalysisStatusError()
    {
        return isset($this->analysis_status_error);
    }

    public function clearAnalysisStatusError()
    {
        unset($this->analysis_status_error);
    }

    /**
     * When an error is encountered this will contain a LocalizedMessage under
     * details to show to the user. The LocalizedMessage is output only and
     * populated by the API.
     *
     * Generated from protobuf field <code>.google.rpc.Status analysis_status_error = 3;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setAnalysisStatusError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->analysis_status_error = $var;

        return $this;
    }

    /**
     * The CPE of the resource being scanned.
     *
     * Generated from protobuf field <code>string cpe = 4;</code>
     * @return string
     */
    public function getCpe()
    {
        return $this->cpe;
    }

    /**
     * The CPE of the resource being scanned.
     *
     * Generated from protobuf field <code>string cpe = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCpe($var)
    {
        GPBUtil::checkString($var, True);
        $this->cpe = $var;

        return $this;
    }

    /**
     * The last time this resource was scanned.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_scan_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastScanTime()
    {
        return $this->last_scan_time;
    }

    public function hasLastScanTime()
    {
        return isset($this->last_scan_time);
    }

    public function clearLastScanTime()
    {
        unset($this->last_scan_time);
    }

    /**
     * The last time this resource was scanned.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_scan_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastScanTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_scan_time = $var;

        return $this;
    }

}

