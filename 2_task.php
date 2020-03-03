<?php

function findCelebrity($users)
{
    foreach ($users as $celebrityCandidate) {
        $isCelebrity = true;
        foreach ($users as $person) {
            if ($celebrityCandidate == $person) {
                continue;
            }
            if (knows($celebrityCandidate, $person) || !knows($person, $celebrityCandidate)) {
                $isCelebrity = false;
                break;
            }
        }
        if ($isCelebrity) {
            return $celebrityCandidate;
        }
    }
    return null;
}
