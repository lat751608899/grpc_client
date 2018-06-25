<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cfwf\Micro_service\School_subject;

/**
 */
class SchoolSubjectClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 获取教材版本
     * @param \Cfwf\Micro_service\School_subject\GetTextbookVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetTextbookVersion(\Cfwf\Micro_service\School_subject\GetTextbookVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_subject.SchoolSubject/GetTextbookVersion',
        $argument,
        ['\Cfwf\Micro_service\School_subject\GetTextbookVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取教材对应的目录信息
     * @param \Cfwf\Micro_service\School_subject\GetTextbookCatalogueRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetTextbookCatalogue(\Cfwf\Micro_service\School_subject\GetTextbookCatalogueRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cfwf.micro_service.school_subject.SchoolSubject/GetTextbookCatalogue',
        $argument,
        ['\Cfwf\Micro_service\School_subject\GetTextbookCatalogueResponse', 'decode'],
        $metadata, $options);
    }

}
