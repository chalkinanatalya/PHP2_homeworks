<?php
//Названия даны так намеренно для того, чтобы было легче тестировать функцию при проверке
namespace Blog_ns;
class Class_Post
{
    public function __construct(
        private string $author,
        private string $text
    ) {
    }
    public function __toString()
    {
        return $this->author . ' пишет: ' . $this->text;
    }
}
