<?php

/*
 * Copyright 2015 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Rsvp\DataModel;

use Google\Cloud\Datastore\DatastoreClient;
use Google\Cloud\Datastore\Entity;

/**
 * Class Datastore implements the DataModel with a Google Data Store.
 */
class Datastore
{
    private $datasetId;
    private $datastore;
    protected $columns = [
        'name' => 'string',
        'invitee' => 'string',
        'party' => 'integer',
        'wedding' => 'bool',
        'sail' => 'bool',
        'misc' => 'string',
        'created' => 'string',
        'updated' => 'string',
    ];

    public function __construct($projectId)
    {
        $this->datasetId = $projectId;
        $this->datastore = new DatastoreClient([
            'projectId' => $projectId,
        ]);
    }

    public function read($id)
    {
        $key = $this->datastore->key('rsvp', $id);
        $entity = $this->datastore->lookup($key);

        if ($entity) {
            $rsvp = $entity->get();
            return $rsvp;
        }

        return false;
    }

    public function update($rsvp)
    {
        $this->verifyRsvp($rsvp);

        if (!isset($rsvp['name'])) {
            throw new \InvalidArgumentException('RSVP must have an "id" attribute');
        }

        $transaction = $this->datastore->transaction();
        $key = $this->datastore->key('rsvp', $rsvp['name']);
        $task = $transaction->lookup($key);
        unset($rsvp['name']);
        $entity = $this->datastore->entity($key, $rsvp);
        $transaction->upsert($entity);
        $transaction->commit();

        // return the number of updated rows
        return 1;
    }

    private function verifyRsvp($rsvp)
    {
        if ($invalid = array_diff_key($rsvp, $this->columns)) {
            throw new \InvalidArgumentException(sprintf(
                'unsupported RSVP properties: "%s"',
                implode(', ', $invalid)
            ));
        }
    }
}
