<?php

declare(strict_types=1);

namespace Git;

//use Git\Commit\CommitAuthor;
//use Git\Commit\CommitCommitter;
//use Git\Commit\CommitDate;
//use Git\Commit\CommitMessage;
//use Git\Commit\CommitParentCollection;
//use Git\Commit\CommitSha;
//use Git\Commit\CommitTree;

interface Commit
{
    // : CommitSha;
    public function getSha();

    // : CommitMessage;
    public function getMessage();

    // : CommitDate;
    public function getCommitDate();

    // : CommitAuthor;
    public function getAuthor();

    // : CommitCommitter;
    public function getCommitter();

    // : CommitTree;
    public function getTree();

    // : CommitParentCollection;
    public function getParents();
}
