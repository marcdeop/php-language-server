<?php

namespace LanguageServer\Protocol;

/**
 * A workspace edit represents changes to many resources managed in the workspace.
 */
class WorkspaceEdit
{
    /**
     * Holds changes to existing resources. Associative Array from URI to TextEdit
     *
     * @var TextEdit[]
     */
    public $changes;

    /**
     * An array of `TextDocumentEdit`s to express changes to n different text documents
     * where each text document edit addresses a specific version of a text document.
     *
     * @var TextDocumentEdit[]
     */
    public $documentChanges;

    /**
     * @param TextEdit[]         $changes
     * @param TextDocumentEdit[] $documentChanges
     */
    public function __construct($changes = null, $documentChanges = null)
    {
        $this->changes         = $changes;
        $this->documentChanges = $documentChanges;
    }
}
