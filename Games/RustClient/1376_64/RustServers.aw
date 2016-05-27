using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;
using System.Net;
using System.Diagnostics;

using Allowerd.Core.Objects;

namespace Allowerd.Core
{
    public sealed class RustServers : Plugin
    {
        public override string Author { get; }
        public override string Name { get; }
        public override int Version { get; }

        public RustServers()
        {
            Author = "TheRyuzaki";
            Name = nameof(RustServers);
            Version = 1;
            Interface.AddPlugin(this);
            Interface.CallHoock("Interface.Log", "Inited - RustServers");
        }
    }
}
