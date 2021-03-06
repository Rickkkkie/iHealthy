<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A face-specific landmark (for example, a face feature).
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.FaceAnnotation.Landmark</code>
 */
class FaceAnnotation_Landmark extends \Google\Protobuf\Internal\Message
{
    /**
     * Face landmark type.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.FaceAnnotation.Landmark.Type type = 3;</code>
     */
    private $type = 0;
    /**
     * Face landmark position.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Position position = 4;</code>
     */
    private $position = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * Face landmark type.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.FaceAnnotation.Landmark.Type type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Face landmark type.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.FaceAnnotation.Landmark.Type type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1\FaceAnnotation_Landmark_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Face landmark position.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Position position = 4;</code>
     * @return \Google\Cloud\Vision\V1\Position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Face landmark position.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Position position = 4;</code>
     * @param \Google\Cloud\Vision\V1\Position $var
     * @return $this
     */
    public function setPosition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\Position::class);
        $this->position = $var;

        return $this;
    }

}

