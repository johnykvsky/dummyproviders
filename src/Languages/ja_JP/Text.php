<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\ja_JP;

use DummyGenerator\Provider\Core\Text as BaseText;
use DummyGenerator\Provider\Definitions\Extension\TextExtensionInterface;

class Text extends BaseText implements TextExtensionInterface
{

    protected string $separator = '';
    protected int $separatorLen = 0;

    /** @var string[] */
    protected array $notBeginPunct = ['、', '。', '」', '』', '）', '…', 'ー', '！', '？'];

    /** @var string[] */
    protected array $notEndPunct = ['「', '『', '（'];

    /** @var string[] */
    protected array $endPunct = ['。', '！', '？'];

    protected function getExplodedText(): array
    {
        if (empty($this->explodedText)) {
            $chars = [];
            foreach (preg_split('//u', preg_replace('/\s+/u', '', $this->baseText) ?? '') as $char) {
                if ($char !== '') {
                    $chars[] = $char;
                }
            }
            $this->explodedText = $chars;
        }

        return $this->explodedText;
    }

    protected function validStart(string $word): bool
    {
        return !in_array($word, $this->notBeginPunct, false);
    }

    public function realText(int $min = 50, int $max = 200, int $indexSize = 2): string
    {
        $text = parent::realText($min, $max, $indexSize);
        if (str_ends_with($text, '.')) {
            $text = substr($text, 0, -1);
        }

        return $text . '。';
    }
}
