<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Sprite sheet configuration.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1.SpriteSheet</code>
 */
class SpriteSheet extends \Google\Protobuf\Internal\Message
{
    /**
     * Format type. The default is `"jpeg"`.
     * Supported formats:
     * - 'jpeg'
     *
     * Generated from protobuf field <code>string format = 1;</code>
     */
    private $format = '';
    /**
     * Required. File name prefix for the generated sprite sheets.
     * Each sprite sheet has an incremental 10-digit zero-padded suffix starting
     * from 0 before the extension, such as `"sprite_sheet0000000123.jpeg"`.
     *
     * Generated from protobuf field <code>string file_prefix = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $file_prefix = '';
    /**
     * Required. The width of sprite in pixels. Must be an even integer. To preserve the
     * source aspect ratio, set the [SpriteSheet.sprite_width_pixels][google.cloud.video.transcoder.v1.SpriteSheet.sprite_width_pixels] field or
     * the [SpriteSheet.sprite_height_pixels][google.cloud.video.transcoder.v1.SpriteSheet.sprite_height_pixels] field, but not both (the API will
     * automatically calculate the missing field).
     *
     * Generated from protobuf field <code>int32 sprite_width_pixels = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $sprite_width_pixels = 0;
    /**
     * Required. The height of sprite in pixels. Must be an even integer. To preserve the
     * source aspect ratio, set the [SpriteSheet.sprite_height_pixels][google.cloud.video.transcoder.v1.SpriteSheet.sprite_height_pixels] field or
     * the [SpriteSheet.sprite_width_pixels][google.cloud.video.transcoder.v1.SpriteSheet.sprite_width_pixels] field, but not both (the API will
     * automatically calculate the missing field).
     *
     * Generated from protobuf field <code>int32 sprite_height_pixels = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $sprite_height_pixels = 0;
    /**
     * The maximum number of sprites per row in a sprite sheet. The default is 0,
     * which indicates no maximum limit.
     *
     * Generated from protobuf field <code>int32 column_count = 5;</code>
     */
    private $column_count = 0;
    /**
     * The maximum number of rows per sprite sheet. When the sprite sheet is full,
     * a new sprite sheet is created. The default is 0, which indicates no maximum
     * limit.
     *
     * Generated from protobuf field <code>int32 row_count = 6;</code>
     */
    private $row_count = 0;
    /**
     * Start time in seconds, relative to the output file timeline. Determines the
     * first sprite to pick. The default is `0s`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time_offset = 7;</code>
     */
    private $start_time_offset = null;
    /**
     * End time in seconds, relative to the output file timeline. When
     * `end_time_offset` is not specified, the sprites are generated until the end
     * of the output file.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time_offset = 8;</code>
     */
    private $end_time_offset = null;
    /**
     * The quality of the generated sprite sheet. Enter a value between 1
     * and 100, where 1 is the lowest quality and 100 is the highest quality.
     * The default is 100. A high quality value corresponds to a low image data
     * compression ratio.
     *
     * Generated from protobuf field <code>int32 quality = 11;</code>
     */
    private $quality = 0;
    protected $extraction_strategy;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $format
     *           Format type. The default is `"jpeg"`.
     *           Supported formats:
     *           - 'jpeg'
     *     @type string $file_prefix
     *           Required. File name prefix for the generated sprite sheets.
     *           Each sprite sheet has an incremental 10-digit zero-padded suffix starting
     *           from 0 before the extension, such as `"sprite_sheet0000000123.jpeg"`.
     *     @type int $sprite_width_pixels
     *           Required. The width of sprite in pixels. Must be an even integer. To preserve the
     *           source aspect ratio, set the [SpriteSheet.sprite_width_pixels][google.cloud.video.transcoder.v1.SpriteSheet.sprite_width_pixels] field or
     *           the [SpriteSheet.sprite_height_pixels][google.cloud.video.transcoder.v1.SpriteSheet.sprite_height_pixels] field, but not both (the API will
     *           automatically calculate the missing field).
     *     @type int $sprite_height_pixels
     *           Required. The height of sprite in pixels. Must be an even integer. To preserve the
     *           source aspect ratio, set the [SpriteSheet.sprite_height_pixels][google.cloud.video.transcoder.v1.SpriteSheet.sprite_height_pixels] field or
     *           the [SpriteSheet.sprite_width_pixels][google.cloud.video.transcoder.v1.SpriteSheet.sprite_width_pixels] field, but not both (the API will
     *           automatically calculate the missing field).
     *     @type int $column_count
     *           The maximum number of sprites per row in a sprite sheet. The default is 0,
     *           which indicates no maximum limit.
     *     @type int $row_count
     *           The maximum number of rows per sprite sheet. When the sprite sheet is full,
     *           a new sprite sheet is created. The default is 0, which indicates no maximum
     *           limit.
     *     @type \Google\Protobuf\Duration $start_time_offset
     *           Start time in seconds, relative to the output file timeline. Determines the
     *           first sprite to pick. The default is `0s`.
     *     @type \Google\Protobuf\Duration $end_time_offset
     *           End time in seconds, relative to the output file timeline. When
     *           `end_time_offset` is not specified, the sprites are generated until the end
     *           of the output file.
     *     @type int $total_count
     *           Total number of sprites. Create the specified number of sprites
     *           distributed evenly across the timeline of the output media. The default
     *           is 100.
     *     @type \Google\Protobuf\Duration $interval
     *           Starting from `0s`, create sprites at regular intervals. Specify the
     *           interval value in seconds.
     *     @type int $quality
     *           The quality of the generated sprite sheet. Enter a value between 1
     *           and 100, where 1 is the lowest quality and 100 is the highest quality.
     *           The default is 100. A high quality value corresponds to a low image data
     *           compression ratio.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Format type. The default is `"jpeg"`.
     * Supported formats:
     * - 'jpeg'
     *
     * Generated from protobuf field <code>string format = 1;</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Format type. The default is `"jpeg"`.
     * Supported formats:
     * - 'jpeg'
     *
     * Generated from protobuf field <code>string format = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->format = $var;

        return $this;
    }

    /**
     * Required. File name prefix for the generated sprite sheets.
     * Each sprite sheet has an incremental 10-digit zero-padded suffix starting
     * from 0 before the extension, such as `"sprite_sheet0000000123.jpeg"`.
     *
     * Generated from protobuf field <code>string file_prefix = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFilePrefix()
    {
        return $this->file_prefix;
    }

    /**
     * Required. File name prefix for the generated sprite sheets.
     * Each sprite sheet has an incremental 10-digit zero-padded suffix starting
     * from 0 before the extension, such as `"sprite_sheet0000000123.jpeg"`.
     *
     * Generated from protobuf field <code>string file_prefix = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFilePrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_prefix = $var;

        return $this;
    }

    /**
     * Required. The width of sprite in pixels. Must be an even integer. To preserve the
     * source aspect ratio, set the [SpriteSheet.sprite_width_pixels][google.cloud.video.transcoder.v1.SpriteSheet.sprite_width_pixels] field or
     * the [SpriteSheet.sprite_height_pixels][google.cloud.video.transcoder.v1.SpriteSheet.sprite_height_pixels] field, but not both (the API will
     * automatically calculate the missing field).
     *
     * Generated from protobuf field <code>int32 sprite_width_pixels = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getSpriteWidthPixels()
    {
        return $this->sprite_width_pixels;
    }

    /**
     * Required. The width of sprite in pixels. Must be an even integer. To preserve the
     * source aspect ratio, set the [SpriteSheet.sprite_width_pixels][google.cloud.video.transcoder.v1.SpriteSheet.sprite_width_pixels] field or
     * the [SpriteSheet.sprite_height_pixels][google.cloud.video.transcoder.v1.SpriteSheet.sprite_height_pixels] field, but not both (the API will
     * automatically calculate the missing field).
     *
     * Generated from protobuf field <code>int32 sprite_width_pixels = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setSpriteWidthPixels($var)
    {
        GPBUtil::checkInt32($var);
        $this->sprite_width_pixels = $var;

        return $this;
    }

    /**
     * Required. The height of sprite in pixels. Must be an even integer. To preserve the
     * source aspect ratio, set the [SpriteSheet.sprite_height_pixels][google.cloud.video.transcoder.v1.SpriteSheet.sprite_height_pixels] field or
     * the [SpriteSheet.sprite_width_pixels][google.cloud.video.transcoder.v1.SpriteSheet.sprite_width_pixels] field, but not both (the API will
     * automatically calculate the missing field).
     *
     * Generated from protobuf field <code>int32 sprite_height_pixels = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getSpriteHeightPixels()
    {
        return $this->sprite_height_pixels;
    }

    /**
     * Required. The height of sprite in pixels. Must be an even integer. To preserve the
     * source aspect ratio, set the [SpriteSheet.sprite_height_pixels][google.cloud.video.transcoder.v1.SpriteSheet.sprite_height_pixels] field or
     * the [SpriteSheet.sprite_width_pixels][google.cloud.video.transcoder.v1.SpriteSheet.sprite_width_pixels] field, but not both (the API will
     * automatically calculate the missing field).
     *
     * Generated from protobuf field <code>int32 sprite_height_pixels = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setSpriteHeightPixels($var)
    {
        GPBUtil::checkInt32($var);
        $this->sprite_height_pixels = $var;

        return $this;
    }

    /**
     * The maximum number of sprites per row in a sprite sheet. The default is 0,
     * which indicates no maximum limit.
     *
     * Generated from protobuf field <code>int32 column_count = 5;</code>
     * @return int
     */
    public function getColumnCount()
    {
        return $this->column_count;
    }

    /**
     * The maximum number of sprites per row in a sprite sheet. The default is 0,
     * which indicates no maximum limit.
     *
     * Generated from protobuf field <code>int32 column_count = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setColumnCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->column_count = $var;

        return $this;
    }

    /**
     * The maximum number of rows per sprite sheet. When the sprite sheet is full,
     * a new sprite sheet is created. The default is 0, which indicates no maximum
     * limit.
     *
     * Generated from protobuf field <code>int32 row_count = 6;</code>
     * @return int
     */
    public function getRowCount()
    {
        return $this->row_count;
    }

    /**
     * The maximum number of rows per sprite sheet. When the sprite sheet is full,
     * a new sprite sheet is created. The default is 0, which indicates no maximum
     * limit.
     *
     * Generated from protobuf field <code>int32 row_count = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setRowCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_count = $var;

        return $this;
    }

    /**
     * Start time in seconds, relative to the output file timeline. Determines the
     * first sprite to pick. The default is `0s`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time_offset = 7;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getStartTimeOffset()
    {
        return isset($this->start_time_offset) ? $this->start_time_offset : null;
    }

    public function hasStartTimeOffset()
    {
        return isset($this->start_time_offset);
    }

    public function clearStartTimeOffset()
    {
        unset($this->start_time_offset);
    }

    /**
     * Start time in seconds, relative to the output file timeline. Determines the
     * first sprite to pick. The default is `0s`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time_offset = 7;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStartTimeOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->start_time_offset = $var;

        return $this;
    }

    /**
     * End time in seconds, relative to the output file timeline. When
     * `end_time_offset` is not specified, the sprites are generated until the end
     * of the output file.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time_offset = 8;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getEndTimeOffset()
    {
        return isset($this->end_time_offset) ? $this->end_time_offset : null;
    }

    public function hasEndTimeOffset()
    {
        return isset($this->end_time_offset);
    }

    public function clearEndTimeOffset()
    {
        unset($this->end_time_offset);
    }

    /**
     * End time in seconds, relative to the output file timeline. When
     * `end_time_offset` is not specified, the sprites are generated until the end
     * of the output file.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time_offset = 8;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setEndTimeOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->end_time_offset = $var;

        return $this;
    }

    /**
     * Total number of sprites. Create the specified number of sprites
     * distributed evenly across the timeline of the output media. The default
     * is 100.
     *
     * Generated from protobuf field <code>int32 total_count = 9;</code>
     * @return int
     */
    public function getTotalCount()
    {
        return $this->readOneof(9);
    }

    public function hasTotalCount()
    {
        return $this->hasOneof(9);
    }

    /**
     * Total number of sprites. Create the specified number of sprites
     * distributed evenly across the timeline of the output media. The default
     * is 100.
     *
     * Generated from protobuf field <code>int32 total_count = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Starting from `0s`, create sprites at regular intervals. Specify the
     * interval value in seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration interval = 10;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getInterval()
    {
        return $this->readOneof(10);
    }

    public function hasInterval()
    {
        return $this->hasOneof(10);
    }

    /**
     * Starting from `0s`, create sprites at regular intervals. Specify the
     * interval value in seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration interval = 10;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * The quality of the generated sprite sheet. Enter a value between 1
     * and 100, where 1 is the lowest quality and 100 is the highest quality.
     * The default is 100. A high quality value corresponds to a low image data
     * compression ratio.
     *
     * Generated from protobuf field <code>int32 quality = 11;</code>
     * @return int
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * The quality of the generated sprite sheet. Enter a value between 1
     * and 100, where 1 is the lowest quality and 100 is the highest quality.
     * The default is 100. A high quality value corresponds to a low image data
     * compression ratio.
     *
     * Generated from protobuf field <code>int32 quality = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setQuality($var)
    {
        GPBUtil::checkInt32($var);
        $this->quality = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtractionStrategy()
    {
        return $this->whichOneof("extraction_strategy");
    }

}

