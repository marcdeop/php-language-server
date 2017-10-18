<?php

namespace LanguageServer\Protocol;

/**
 * A textual edit applicable to a text document.
 */
class TextDocumentEdit
{
    /**
     * The text document to change.
     *
     * @var VersionedTextDocumentIdentifier
     */
    public $textDocument;

    /**
     * The edits to be applied.
     *
     * @var TextEdit[]
     */
    public $edits;
}
