<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce11bc4a3c7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Security\Recaptcha; use Exception; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; class API extends BaseClass { public function __construct() { $this->domain = "\x68\164\x74\x70\163\72\57\x2f\x77\x77\x77\x2e\147\x6f\x6f\x67\x6c\x65\56\x63\x6f\155\57\x72\x65\143\141\160\164\x63\150\x61\57\x61\160\x69"; $this->ueqoossgegqyosem(["\163\145\x63\x72\x65\164" => null, "\162\145\x73\x70\157\156\163\145" => null]); parent::__construct(); } public function iywiwaoieigskusm($agguukmgmwmmmcow, $keccaugmemegoimu, $yeceiswwssseqgqc, array $qiouiwasaauyaaue = []) { $kuukgsmqkagwaciu = null; $iswcokucwmiosiaq = null; $occymigcemkqucuw = false; try { $this->ueqoossgegqyosem(["\163\x65\143\x72\x65\x74" => $agguukmgmwmmmcow, "\x72\x65\x73\160\x6f\x6e\x73\145" => $keccaugmemegoimu, "\x72\145\155\x6f\164\145\151\x70" => $yeceiswwssseqgqc], true); $kuukgsmqkagwaciu = $this->get("\57\x73\151\164\145\166\145\162\151\146\x79", $qiouiwasaauyaaue); $kuukgsmqkagwaciu = $this->qemyqseaomicaacs($kuukgsmqkagwaciu); if (!$kuukgsmqkagwaciu) { goto qsygcycwieukkgwc; } $occymigcemkqucuw = true; qsygcycwieukkgwc: } catch (Exception $wgaoewqkwgomoaai) { $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai); } return $occymigcemkqucuw && $kuukgsmqkagwaciu ? $kuukgsmqkagwaciu : [Constants::ckcawaoawwioqecq => false, Constants::imkacwmiuiykyuim => $iswcokucwmiosiaq, "\145\162\x72\x6f\162\x2d\x63\157\x64\145\x73" => ["\147\145\x6e\x65\x72\141\x6c\55\x66\x61\x69\154"]]; } }
