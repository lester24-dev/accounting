<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/text_annotation.proto

namespace GPBMetadata\Google\Cloud\Vision\V1;

class TextAnnotation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Vision\V1\Geometry::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8e0e0a2c676f6f676c652f636c6f75642f766973696f6e2f76312f7465" .
            "78745f616e6e6f746174696f6e2e70726f746f1216676f6f676c652e636c" .
            "6f75642e766973696f6e2e76311a25676f6f676c652f636c6f75642f7669" .
            "73696f6e2f76312f67656f6d657472792e70726f746f2296040a0e546578" .
            "74416e6e6f746174696f6e122b0a05706167657318012003280b321c2e67" .
            "6f6f676c652e636c6f75642e766973696f6e2e76312e50616765120c0a04" .
            "746578741802200128091a3d0a1044657465637465644c616e6775616765" .
            "12150a0d6c616e67756167655f636f646518012001280912120a0a636f6e" .
            "666964656e63651802200128021ad5010a0d446574656374656442726561" .
            "6b124c0a047479706518012001280e323e2e676f6f676c652e636c6f7564" .
            "2e766973696f6e2e76312e54657874416e6e6f746174696f6e2e44657465" .
            "63746564427265616b2e427265616b5479706512110a0969735f70726566" .
            "697818022001280822630a09427265616b54797065120b0a07554e4b4e4f" .
            "574e100012090a0553504143451001120e0a0a535552455f535041434510" .
            "0212120a0e454f4c5f535552455f53504143451003120a0a064859504845" .
            "4e1004120e0a0a4c494e455f425245414b10051ab1010a0c546578745072" .
            "6f706572747912530a1264657465637465645f6c616e6775616765731801" .
            "2003280b32372e676f6f676c652e636c6f75642e766973696f6e2e76312e" .
            "54657874416e6e6f746174696f6e2e44657465637465644c616e67756167" .
            "65124c0a0e64657465637465645f627265616b18022001280b32342e676f" .
            "6f676c652e636c6f75642e766973696f6e2e76312e54657874416e6e6f74" .
            "6174696f6e2e4465746563746564427265616b229b010a04506167651245" .
            "0a0870726f706572747918012001280b32332e676f6f676c652e636c6f75" .
            "642e766973696f6e2e76312e54657874416e6e6f746174696f6e2e546578" .
            "7450726f7065727479120d0a057769647468180220012805120e0a066865" .
            "69676874180320012805122d0a06626c6f636b7318042003280b321d2e67" .
            "6f6f676c652e636c6f75642e766973696f6e2e76312e426c6f636b22d202" .
            "0a05426c6f636b12450a0870726f706572747918012001280b32332e676f" .
            "6f676c652e636c6f75642e766973696f6e2e76312e54657874416e6e6f74" .
            "6174696f6e2e5465787450726f7065727479123a0a0c626f756e64696e67" .
            "5f626f7818022001280b32242e676f6f676c652e636c6f75642e76697369" .
            "6f6e2e76312e426f756e64696e67506f6c7912350a0a7061726167726170" .
            "687318032003280b32212e676f6f676c652e636c6f75642e766973696f6e" .
            "2e76312e506172616772617068123b0a0a626c6f636b5f74797065180420" .
            "01280e32272e676f6f676c652e636c6f75642e766973696f6e2e76312e42" .
            "6c6f636b2e426c6f636b5479706522520a09426c6f636b54797065120b0a" .
            "07554e4b4e4f574e100012080a0454455854100112090a055441424c4510" .
            "02120b0a0750494354555245100312090a0552554c45521004120b0a0742" .
            "4152434f4445100522bb010a0950617261677261706812450a0870726f70" .
            "6572747918012001280b32332e676f6f676c652e636c6f75642e76697369" .
            "6f6e2e76312e54657874416e6e6f746174696f6e2e5465787450726f7065" .
            "727479123a0a0c626f756e64696e675f626f7818022001280b32242e676f" .
            "6f676c652e636c6f75642e766973696f6e2e76312e426f756e64696e6750" .
            "6f6c79122b0a05776f72647318032003280b321c2e676f6f676c652e636c" .
            "6f75642e766973696f6e2e76312e576f726422ba010a04576f726412450a" .
            "0870726f706572747918012001280b32332e676f6f676c652e636c6f7564" .
            "2e766973696f6e2e76312e54657874416e6e6f746174696f6e2e54657874" .
            "50726f7065727479123a0a0c626f756e64696e675f626f7818022001280b" .
            "32242e676f6f676c652e636c6f75642e766973696f6e2e76312e426f756e" .
            "64696e67506f6c79122f0a0773796d626f6c7318032003280b321e2e676f" .
            "6f676c652e636c6f75642e766973696f6e2e76312e53796d626f6c229901" .
            "0a0653796d626f6c12450a0870726f706572747918012001280b32332e67" .
            "6f6f676c652e636c6f75642e766973696f6e2e76312e54657874416e6e6f" .
            "746174696f6e2e5465787450726f7065727479123a0a0c626f756e64696e" .
            "675f626f7818022001280b32242e676f6f676c652e636c6f75642e766973" .
            "696f6e2e76312e426f756e64696e67506f6c79120c0a0474657874180320" .
            "01280942740a1a636f6d2e676f6f676c652e636c6f75642e766973696f6e" .
            "2e7631421354657874416e6e6f746174696f6e50726f746f50015a3c676f" .
            "6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c" .
            "65617069732f636c6f75642f766973696f6e2f76313b766973696f6ef801" .
            "01620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

