<?php
namespace Aws\MemoryDB;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon MemoryDB** service.
 * @method \Aws\Result batchUpdateCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUpdateClusterAsync(array $args = [])
 * @method \Aws\Result copySnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copySnapshotAsync(array $args = [])
 * @method \Aws\Result createACL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createACLAsync(array $args = [])
 * @method \Aws\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \Aws\Result createMultiRegionCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMultiRegionClusterAsync(array $args = [])
 * @method \Aws\Result createParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createParameterGroupAsync(array $args = [])
 * @method \Aws\Result createSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotAsync(array $args = [])
 * @method \Aws\Result createSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubnetGroupAsync(array $args = [])
 * @method \Aws\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \Aws\Result deleteACL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteACLAsync(array $args = [])
 * @method \Aws\Result deleteCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \Aws\Result deleteMultiRegionCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMultiRegionClusterAsync(array $args = [])
 * @method \Aws\Result deleteParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteParameterGroupAsync(array $args = [])
 * @method \Aws\Result deleteSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSnapshotAsync(array $args = [])
 * @method \Aws\Result deleteSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubnetGroupAsync(array $args = [])
 * @method \Aws\Result deleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \Aws\Result describeACLs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeACLsAsync(array $args = [])
 * @method \Aws\Result describeClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClustersAsync(array $args = [])
 * @method \Aws\Result describeEngineVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEngineVersionsAsync(array $args = [])
 * @method \Aws\Result describeEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \Aws\Result describeMultiRegionClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMultiRegionClustersAsync(array $args = [])
 * @method \Aws\Result describeParameterGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeParameterGroupsAsync(array $args = [])
 * @method \Aws\Result describeParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeParametersAsync(array $args = [])
 * @method \Aws\Result describeReservedNodes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedNodesAsync(array $args = [])
 * @method \Aws\Result describeReservedNodesOfferings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedNodesOfferingsAsync(array $args = [])
 * @method \Aws\Result describeServiceUpdates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServiceUpdatesAsync(array $args = [])
 * @method \Aws\Result describeSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotsAsync(array $args = [])
 * @method \Aws\Result describeSubnetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubnetGroupsAsync(array $args = [])
 * @method \Aws\Result describeUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUsersAsync(array $args = [])
 * @method \Aws\Result failoverShard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise failoverShardAsync(array $args = [])
 * @method \Aws\Result listAllowedMultiRegionClusterUpdates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAllowedMultiRegionClusterUpdatesAsync(array $args = [])
 * @method \Aws\Result listAllowedNodeTypeUpdates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAllowedNodeTypeUpdatesAsync(array $args = [])
 * @method \Aws\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \Aws\Result purchaseReservedNodesOffering(array $args = [])
 * @method \GuzzleHttp\Promise\Promise purchaseReservedNodesOfferingAsync(array $args = [])
 * @method \Aws\Result resetParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetParameterGroupAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateACL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateACLAsync(array $args = [])
 * @method \Aws\Result updateCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateClusterAsync(array $args = [])
 * @method \Aws\Result updateMultiRegionCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMultiRegionClusterAsync(array $args = [])
 * @method \Aws\Result updateParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateParameterGroupAsync(array $args = [])
 * @method \Aws\Result updateSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubnetGroupAsync(array $args = [])
 * @method \Aws\Result updateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserAsync(array $args = [])
 */
class MemoryDBClient extends AwsClient {}
