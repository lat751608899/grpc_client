<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account.proto

namespace GPBMetadata;

class Account
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0aeb3f0a0d6163636f756e742e70726f746f121a636677662e6d6963726f" .
            "5f736572766963652e6163636f756e74221c0a0d436f6d6d6f6e52657175" .
            "657374120b0a036d7367180120012809225a0a0e436f6d6d6f6e52657370" .
            "6f6e7365123b0a06726573756c7418012001280e322b2e636677662e6d69" .
            "63726f5f736572766963652e6163636f756e742e5250435f43414c4c5f52" .
            "4553554c54120b0a036d736718022001280922b1010a245265676973744e" .
            "65774163636f756e7442794d6f62696c6550686f6e655265717565737412" .
            "0d0a0563625f696418012001280912140a0c6d6f62696c655f70686f6e65" .
            "18022001280912100a08757365726e616d6518032001280912100a087061" .
            "7373776f726418042001280912400a086964656e7469747918052001280e" .
            "322e2e636677662e6d6963726f5f736572766963652e6163636f756e742e" .
            "555345525f4944454e544954595f545950452286010a185265676973744e" .
            "65774163636f756e74526573706f6e7365123b0a06726573756c74180120" .
            "01280e322b2e636677662e6d6963726f5f736572766963652e6163636f75" .
            "6e742e5250435f43414c4c5f524553554c54120e0a066572726d73671802" .
            "20012809120d0a0563625f6964180320012809120e0a0675736572696418" .
            "0420012806228d010a0f4261746368526567697374496e666f12140a0c6d" .
            "6f62696c655f70686f6e6518012001280912100a08757365726e616d6518" .
            "022001280912100a0870617373776f726418032001280912400a08696465" .
            "6e7469747918042001280e322e2e636677662e6d6963726f5f7365727669" .
            "63652e6163636f756e742e555345525f4944454e544954595f5459504522" .
            "81010a174261746368526567697374526573706f6e7365496e666f12140a" .
            "0c6d6f62696c655f70686f6e6518012001280912100a08757365726e616d" .
            "65180220012809120f0a0773756363657373180320012808120e0a066572" .
            "726d7367180420012809120d0a0563625f6964180520012809120e0a0675" .
            "736572696418062001280622590a1c42617463685265676973744e657741" .
            "63636f756e745265717565737412390a046c69737418012003280b322b2e" .
            "636677662e6d6963726f5f736572766963652e6163636f756e742e426174" .
            "6368526567697374496e666f229f010a1d42617463685265676973744e65" .
            "774163636f756e74526573706f6e7365123b0a06726573756c7418012001" .
            "280e322b2e636677662e6d6963726f5f736572766963652e6163636f756e" .
            "742e5250435f43414c4c5f524553554c5412410a046c6973741802200328" .
            "0b32332e636677662e6d6963726f5f736572766963652e6163636f756e74" .
            "2e4261746368526567697374526573706f6e7365496e666f22760a214368" .
            "65636b4d6f62696c6550686f6e65417661696c61626c65526573706f6e73" .
            "65123b0a06726573756c7418012001280e322b2e636677662e6d6963726f" .
            "5f736572766963652e6163636f756e742e5250435f43414c4c5f52455355" .
            "4c5412140a0c636865636b5f726573756c74180220012805223b0a144163" .
            "746976654163636f756e7452657175657374120e0a067573657269641801" .
            "2001280612130a0b6163746976655f636f6465180220012809228f020a0c" .
            "557365724964656e7469747912120a0a69735f73747564656e7418012001" .
            "280812120a0a69735f7465616368657218022001280812190a1169735f73" .
            "63686f6f6c5f6d616e61676572180320012808121b0a1369735f74656163" .
            "685f7265736561726368657218042001280812190a1169735f7374756465" .
            "6e745f706172656e74180520012808121a0a1269735f636f6c6c6567655f" .
            "73747564656e74180620012808121a0a1269735f636f6c6c6567655f7465" .
            "6163686572180720012808121a0a1269735f636f6c6c6567655f6d616e61" .
            "67657218082001280812190a1169735f6564755f6d616e6167656d656e74" .
            "18092001280812150a0d69735f636f6d6d65726369616c180a2001280822" .
            "270a1544656c657465557365724d6f6f6452657175657374120e0a067573" .
            "6572696418012001280622fa020a0c5573657242617365496e666f120e0a" .
            "06757365726964180120012806120d0a0563625f6964180220012809123a" .
            "0a086964656e7469747918032001280b32282e636677662e6d6963726f5f" .
            "736572766963652e6163636f756e742e557365724964656e746974791210" .
            "0a08757365726e616d6518042001280912110a09757365725f6661636518" .
            "052001280912140a0c64656661756c745f6661636518062001280512310a" .
            "0373657818072001280e32242e636677662e6d6963726f5f736572766963" .
            "652e6163636f756e742e555345525f534558120e0a066369747969641808" .
            "20012805120c0a046d6f6f6418092001280912100a086269727468646179" .
            "180a2001280512130a0b62696e645f6d6f62696c65180b2001280912450a" .
            "0f62656c6f6e675f756e697474797065180c2001280e322c2e636677662e" .
            "6d6963726f5f736572766963652e6163636f756e742e42454c4f4e475f55" .
            "4e49545f5459504512150a0d62656c6f6e675f756e69746964180d200128" .
            "06225b0a0e5573657253696d706c65496e666f120e0a0675736572696418" .
            "012001280612100a08757365726e616d6518022001280912110a09757365" .
            "725f6661636518032001280912140a0c64656661756c745f666163651804" .
            "200128052285010a16536574557365724964656e74697479526571756573" .
            "74120e0a0675736572696418012001280612400a086964656e7469747918" .
            "022001280e322e2e636677662e6d6963726f5f736572766963652e616363" .
            "6f756e742e555345525f4944454e544954595f5459504512190a11686173" .
            "5f746869735f6964656e74697479180320012808228c010a145365744265" .
            "6c6f6e67556e69745265717565737412120a0a6f70657261746f72696418" .
            "0120012806120e0a06757365726964180220012806123f0a09756e69745f" .
            "7479706518032001280e322c2e636677662e6d6963726f5f736572766963" .
            "652e6163636f756e742e42454c4f4e475f554e49545f54595045120f0a07" .
            "756e69745f696418042001280622680a1953657455736572416c6c496465" .
            "6e7469747952657175657374120e0a06757365726964180120012806123b" .
            "0a096964656e746974797318022001280b32282e636677662e6d6963726f" .
            "5f736572766963652e6163636f756e742e557365724964656e7469747922" .
            "720a1253657455736572496e666f52657175657374120e0a067573657269" .
            "64180120012803123d0a09696e666f5f7479706518022001280e322a2e63" .
            "6677662e6d6963726f5f736572766963652e6163636f756e742e55534552" .
            "5f494e464f5f54595045120d0a0576616c756518032001280922700a1953" .
            "657455736572467269656e64436865636b52657175657374120e0a067573" .
            "6572696418012001280612430a0c667269656e645f636865636b18022001" .
            "280e322d2e636677662e6d6963726f5f736572766963652e6163636f756e" .
            "742e465245494e445f434845434b5f54595045222b0a1947657455736572" .
            "467269656e64436865636b52657175657374120e0a067573657269641801" .
            "2001280622ae010a1a47657455736572467269656e64436865636b526573" .
            "706f6e7365123b0a06726573756c7418012001280e322b2e636677662e6d" .
            "6963726f5f736572766963652e6163636f756e742e5250435f43414c4c5f" .
            "524553554c54120e0a0675736572696418022001280612430a0c66726965" .
            "6e645f636865636b18032001280e322d2e636677662e6d6963726f5f7365" .
            "72766963652e6163636f756e742e465245494e445f434845434b5f545950" .
            "4522390a1142696e644d6f62696c6552657175657374120e0a0675736572" .
            "696418012001280612140a0c6d6f62696c655f70686f6e65180220012809" .
            "22260a144765744d7942617365496e666f52657175657374120e0a067573" .
            "6572696418012001280622e4010a154765744d7942617365496e666f5265" .
            "73706f6e7365123b0a06726573756c7418012001280e322b2e636677662e" .
            "6d6963726f5f736572766963652e6163636f756e742e5250435f43414c4c" .
            "5f524553554c54123a0a0862617365696e666f18022001280b32282e6366" .
            "77662e6d6963726f5f736572766963652e6163636f756e742e5573657242" .
            "617365496e666f120d0a05656d61696c18032001280912430a0c66726965" .
            "6e645f636865636b18042001280e322d2e636677662e6d6963726f5f7365" .
            "72766963652e6163636f756e742e465245494e445f434845434b5f545950" .
            "4522280a164765745573657242617365496e666f52657175657374120e0a" .
            "06757365726964180120032806228e010a17476574557365724261736549" .
            "6e666f526573706f6e7365123b0a06726573756c7418012001280e322b2e" .
            "636677662e6d6963726f5f736572766963652e6163636f756e742e525043" .
            "5f43414c4c5f524553554c5412360a046c69737418022003280b32282e63" .
            "6677662e6d6963726f5f736572766963652e6163636f756e742e55736572" .
            "42617365496e666f22260a144765745573657253696d706c655265717565" .
            "7374120e0a06757365726964180120032806228e010a1547657455736572" .
            "53696d706c65526573706f6e7365123b0a06726573756c7418012001280e" .
            "322b2e636677662e6d6963726f5f736572766963652e6163636f756e742e" .
            "5250435f43414c4c5f524553554c5412380a046c69737418022003280b32" .
            "2a2e636677662e6d6963726f5f736572766963652e6163636f756e742e55" .
            "73657253696d706c65496e666f222f0a1e51756572795573657242617365" .
            "496e666f42794342496452657175657374120d0a0563625f696418012001" .
            "2809229a010a1f51756572795573657242617365496e666f427943424964" .
            "526573706f6e7365123b0a06726573756c7418012001280e322b2e636677" .
            "662e6d6963726f5f736572766963652e6163636f756e742e5250435f4341" .
            "4c4c5f524553554c54123a0a0862617365696e666f18022001280b32282e" .
            "636677662e6d6963726f5f736572766963652e6163636f756e742e557365" .
            "7242617365496e666f22d2010a195365617263685573657242617365496e" .
            "666f5265717565737412110a09706167655f73697a65180120012805120c" .
            "0a0470616765180220012805120f0a076b6579776f726418032001280912" .
            "0e0a0663697479696418042001280912310a0373657818052001280e3224" .
            "2e636677662e6d6963726f5f736572766963652e6163636f756e742e5553" .
            "45525f53455812400a086964656e7469747918062003280e322e2e636677" .
            "662e6d6963726f5f736572766963652e6163636f756e742e555345525f49" .
            "44454e544954595f5459504522dc010a1a53656172636855736572426173" .
            "65496e666f526573706f6e7365123b0a06726573756c7418012001280e32" .
            "2b2e636677662e6d6963726f5f736572766963652e6163636f756e742e52" .
            "50435f43414c4c5f524553554c5412110a09706167655f73697a65180220" .
            "012805120c0a047061676518032001280512120a0a706167655f636f756e" .
            "7418042001280512140a0c7265636f72645f636f756e7418052001280512" .
            "360a046c69737418062003280b32282e636677662e6d6963726f5f736572" .
            "766963652e6163636f756e742e5573657242617365496e666f22230a1047" .
            "657455736572496452657175657374120f0a076c6f67696e696418012001" .
            "280922600a11476574557365724964526573706f6e7365123b0a06726573" .
            "756c7418012001280e322b2e636677662e6d6963726f5f73657276696365" .
            "2e6163636f756e742e5250435f43414c4c5f524553554c54120e0a067573" .
            "6572696418022001280422260a1453657455736572537461747573526571" .
            "75657374120e0a06757365726964180120012806222d0a1b47657442696e" .
            "64656450686f6e654e756d62657252657175657374120e0a067573657269" .
            "64180120012806226d0a1c47657442696e64656450686f6e654e756d6265" .
            "72526573706f6e7365123b0a06726573756c7418012001280e322b2e6366" .
            "77662e6d6963726f5f736572766963652e6163636f756e742e5250435f43" .
            "414c4c5f524553554c5412100a0870686f6e655f6e6f1802200128092acf" .
            "010a0f5250435f43414c4c5f524553554c5412180a145250435f43414c4c" .
            "5f524553554c545f4e4f4e451000121b0a175250435f43414c4c5f524553" .
            "554c545f535543434553531001121c0a185250435f43414c4c5f52455355" .
            "4c545f44425f4552524f521002121f0a1b5250435f43414c4c5f52455355" .
            "4c545f494e5055545f4552524f52100312220a1e5250435f43414c4c5f52" .
            "4553554c545f4954454d5f4e4f545f4558495354100412220a1e5250435f" .
            "43414c4c5f524553554c545f4954454d5f4841535f455849535410052a42" .
            "0a08555345525f53455812110a0d555345525f5345585f494e4954100012" .
            "110a0d555345525f5345585f4749524c100112100a0c555345525f534558" .
            "5f424f5910022aaa030a12555345525f4944454e544954595f5459504512" .
            "1b0a17555345525f4944454e544954595f545950455f4e4f4e451000121e" .
            "0a1a555345525f4944454e544954595f545950455f53545544454e541001" .
            "121e0a1a555345525f4944454e544954595f545950455f54454143484552" .
            "100212250a21555345525f4944454e544954595f545950455f5343484f4f" .
            "4c5f4d414e41474552100312270a23555345525f4944454e544954595f54" .
            "5950455f54454143485f52455345415243484552100412250a2155534552" .
            "5f4944454e544954595f545950455f53545544454e545f504152454e5410" .
            "0512260a22555345525f4944454e544954595f545950455f434f4c4c4547" .
            "455f53545544454e54100b12260a22555345525f4944454e544954595f54" .
            "5950455f434f4c4c4547455f54454143484552100c12260a22555345525f" .
            "4944454e544954595f545950455f434f4c4c4547455f4d414e4147455210" .
            "0d12250a21555345525f4944454e544954595f545950455f4544555f4d41" .
            "4e4147454d454e54101512210a1d555345525f4944454e544954595f5459" .
            "50455f434f4d4d45524349414c101f2a8e010a1042454c4f4e475f554e49" .
            "545f5459504512190a1542454c4f4e475f554e49545f545950455f4e4f4e" .
            "451000121b0a1742454c4f4e475f554e49545f545950455f5343484f4f4c" .
            "1001121f0a1b42454c4f4e475f554e49545f545950455f4544555f425552" .
            "454155100212210a1d42454c4f4e475f554e49545f545950455f54454143" .
            "485f4f464649434510032a8c010a11465245494e445f434845434b5f5459" .
            "5045121d0a19465245494e445f434845434b5f545950455f44454641554c" .
            "541000121b0a17465245494e445f434845434b5f545950455f4147524545" .
            "1001121d0a19465245494e445f434845434b5f545950455f415050524f56" .
            "451002121c0a18465245494e445f434845434b5f545950455f5245465553" .
            "4510032aee010a0e555345525f494e464f5f5459504512170a1355534552" .
            "5f494e464f5f545950455f4e6f6e651000121b0a17555345525f494e464f" .
            "5f545950455f557365724e616d65100112160a12555345525f494e464f5f" .
            "545950455f536578100212190a15555345525f494e464f5f545950455f43" .
            "69747949641003121b0a17555345525f494e464f5f545950455f42697274" .
            "68446179100412170a13555345525f494e464f5f545950455f4d6f6f6410" .
            "05121d0a19555345525f494e464f5f545950455f437573746f6d46616365" .
            "1006121e0a1a555345525f494e464f5f545950455f44656661756c744661" .
            "6365100732db120a074163636f756e741287010a19436865636b4d6f6269" .
            "6c6550686f6e65417661696c61626c6512292e636677662e6d6963726f5f" .
            "736572766963652e6163636f756e742e436f6d6d6f6e526571756573741a" .
            "3d2e636677662e6d6963726f5f736572766963652e6163636f756e742e43" .
            "6865636b4d6f62696c6550686f6e65417661696c61626c65526573706f6e" .
            "736522001299010a1d5265676973744e65774163636f756e7442794d6f62" .
            "696c6550686f6e6512402e636677662e6d6963726f5f736572766963652e" .
            "6163636f756e742e5265676973744e65774163636f756e7442794d6f6269" .
            "6c6550686f6e65526571756573741a342e636677662e6d6963726f5f7365" .
            "72766963652e6163636f756e742e5265676973744e65774163636f756e74" .
            "526573706f6e73652200128e010a1542617463685265676973744e657741" .
            "63636f756e7412382e636677662e6d6963726f5f736572766963652e6163" .
            "636f756e742e42617463685265676973744e65774163636f756e74526571" .
            "756573741a392e636677662e6d6963726f5f736572766963652e6163636f" .
            "756e742e42617463685265676973744e65774163636f756e74526573706f" .
            "6e7365220012730a0f536574557365724964656e7469747912322e636677" .
            "662e6d6963726f5f736572766963652e6163636f756e742e536574557365" .
            "724964656e74697479526571756573741a2a2e636677662e6d6963726f5f" .
            "736572766963652e6163636f756e742e436f6d6d6f6e526573706f6e7365" .
            "2200126f0a0d53657442656c6f6e67556e697412302e636677662e6d6963" .
            "726f5f736572766963652e6163636f756e742e53657442656c6f6e67556e" .
            "6974526571756573741a2a2e636677662e6d6963726f5f73657276696365" .
            "2e6163636f756e742e436f6d6d6f6e526573706f6e7365220012690a0f53" .
            "65745573657242617365496e666f12282e636677662e6d6963726f5f7365" .
            "72766963652e6163636f756e742e5573657242617365496e666f1a2a2e63" .
            "6677662e6d6963726f5f736572766963652e6163636f756e742e436f6d6d" .
            "6f6e526573706f6e73652200126b0a0b53657455736572496e666f122e2e" .
            "636677662e6d6963726f5f736572766963652e6163636f756e742e536574" .
            "55736572496e666f526571756573741a2a2e636677662e6d6963726f5f73" .
            "6572766963652e6163636f756e742e436f6d6d6f6e526573706f6e736522" .
            "0012790a1253657455736572467269656e64436865636b12352e63667766" .
            "2e6d6963726f5f736572766963652e6163636f756e742e53657455736572" .
            "467269656e64436865636b526571756573741a2a2e636677662e6d696372" .
            "6f5f736572766963652e6163636f756e742e436f6d6d6f6e526573706f6e" .
            "7365220012690a0a42696e644d6f62696c65122d2e636677662e6d696372" .
            "6f5f736572766963652e6163636f756e742e42696e644d6f62696c655265" .
            "71756573741a2a2e636677662e6d6963726f5f736572766963652e616363" .
            "6f756e742e436f6d6d6f6e526573706f6e7365220012710a0e44656c6574" .
            "65557365724d6f6f6412312e636677662e6d6963726f5f73657276696365" .
            "2e6163636f756e742e44656c657465557365724d6f6f6452657175657374" .
            "1a2a2e636677662e6d6963726f5f736572766963652e6163636f756e742e" .
            "436f6d6d6f6e526573706f6e7365220012760a0d4765744d794261736549" .
            "6e666f12302e636677662e6d6963726f5f736572766963652e6163636f75" .
            "6e742e4765744d7942617365496e666f526571756573741a312e63667766" .
            "2e6d6963726f5f736572766963652e6163636f756e742e4765744d794261" .
            "7365496e666f526573706f6e73652200127c0a0f47657455736572426173" .
            "65496e666f12322e636677662e6d6963726f5f736572766963652e616363" .
            "6f756e742e4765745573657242617365496e666f526571756573741a332e" .
            "636677662e6d6963726f5f736572766963652e6163636f756e742e476574" .
            "5573657242617365496e666f526573706f6e73652200127a0a1147657455" .
            "73657253696d706c65496e666f12302e636677662e6d6963726f5f736572" .
            "766963652e6163636f756e742e4765745573657253696d706c6552657175" .
            "6573741a312e636677662e6d6963726f5f736572766963652e6163636f75" .
            "6e742e4765745573657253696d706c65526573706f6e736522001294010a" .
            "1751756572795573657242617365496e666f427943424964123a2e636677" .
            "662e6d6963726f5f736572766963652e6163636f756e742e517565727955" .
            "73657242617365496e666f427943424964526571756573741a3b2e636677" .
            "662e6d6963726f5f736572766963652e6163636f756e742e517565727955" .
            "73657242617365496e666f427943424964526573706f6e73652200128501" .
            "0a1247657455736572467269656e64436865636b12352e636677662e6d69" .
            "63726f5f736572766963652e6163636f756e742e47657455736572467269" .
            "656e64436865636b526571756573741a362e636677662e6d6963726f5f73" .
            "6572766963652e6163636f756e742e47657455736572467269656e644368" .
            "65636b526573706f6e736522001285010a12536561726368557365724261" .
            "7365496e666f12352e636677662e6d6963726f5f736572766963652e6163" .
            "636f756e742e5365617263685573657242617365496e666f526571756573" .
            "741a362e636677662e6d6963726f5f736572766963652e6163636f756e74" .
            "2e5365617263685573657242617365496e666f526573706f6e7365220012" .
            "6a0a09476574557365724964122c2e636677662e6d6963726f5f73657276" .
            "6963652e6163636f756e742e476574557365724964526571756573741a2d" .
            "2e636677662e6d6963726f5f736572766963652e6163636f756e742e4765" .
            "74557365724964526573706f6e73652200126f0a0d536574557365725374" .
            "6174757312302e636677662e6d6963726f5f736572766963652e6163636f" .
            "756e742e53657455736572537461747573526571756573741a2a2e636677" .
            "662e6d6963726f5f736572766963652e6163636f756e742e436f6d6d6f6e" .
            "526573706f6e73652200128b010a1447657442696e64656450686f6e654e" .
            "756d62657212372e636677662e6d6963726f5f736572766963652e616363" .
            "6f756e742e47657442696e64656450686f6e654e756d6265725265717565" .
            "73741a382e636677662e6d6963726f5f736572766963652e6163636f756e" .
            "742e47657442696e64656450686f6e654e756d626572526573706f6e7365" .
            "220042200a1e636f6d2e636677662e6d6963726f5f736572766963652e61" .
            "63636f756e74620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

